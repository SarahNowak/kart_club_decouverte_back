<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\UserInfoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
* @Route("/api/user", name="api_user_")
*/
class UserController extends AbstractController
{
    /**
     * @Route("/create_user", name="add", methods={"POST"})
     */
    public function add(Request $request, UserPasswordHasherInterface $userPasswordHasherInterface)
    {
        $user = new User();       
        $form = $this->createForm(UserType::class, $user, ['csrf_protection' => false]);
        $json = $request->getContent();
        $jsonArray = json_decode($json, true);
        $form->submit($jsonArray);

        if ($form->isValid()) {

            $newPassword = $form->get('password')->getData();

            if ($newPassword != null) {
                $encodePassword = $userPasswordHasherInterface->hashPassword($user, $newPassword);
                $user->setPassword($encodePassword);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            return $this->json($user, Response::HTTP_CREATED, [], [
                'groups' => ['user_read'],
            ]);
        }
        
        $errorsString = (string) $form->getErrors(true);

        return $this->json([
            'errors' => $errorsString,
        ], Response::HTTP_BAD_REQUEST);
    }

    /**
     * @Route("/current", name="current", methods={"GET"})
     */
    public function current(UserInterface $user)
    {
        return $this->json($user, Response::HTTP_OK, [],[
            'groups' => ['user_read']
        ]);
    }

     /**
     * @Route("/{id}", name="edit", methods={"PUT"})
     */
    public function edit(User $user, Request $request)
    {
        $form = $this->createForm(UserInfoType::class, $user, ['csrf_protection' => false]);
        $jsonArray = json_decode($request->getContent(), true);
        $form->submit($jsonArray);

        if ($form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->json($user, Response::HTTP_OK, [], [
                'groups' => ['user_read'],
            ]);
        }

        return $this->json([
            'errors' => (string) $form->getErrors(true),
        ], Response::HTTP_BAD_REQUEST);
    }

}
