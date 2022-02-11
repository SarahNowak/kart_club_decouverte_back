<?php

namespace App\Controller;

use App\Entity\MemberFamily;
use App\Form\MemberFamilyType;
use App\Repository\MemberFamilyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/api/memberfamily", name="api_member_family_")
*/
class MemberFamilyController extends AbstractController
{
    /**
     * @Route("", name="browse", methods={"GET"})
     */
    public function browse(MemberFamilyRepository $memberFamilyRepository): Response
    {
        $memberFamily = $memberFamilyRepository->findAll();

        return $this->json($memberFamily, Response::HTTP_OK, [],[
            'groups' => ['memberFamily_browse']
        ]);
    }

    /**
     * @Route("/create", name="add", methods={"POST"})
     */
    public function add(Request $request)
    {
        $memberFamily = new MemberFamily();       
        $form = $this->createForm(MemberFamilyType::class, $memberFamily, ['csrf_protection' => false]);
        $json = $request->getContent();
        $jsonArray = json_decode($json, true);
        $form->submit($jsonArray);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($memberFamily);
            $em->flush();
            
            return $this->json($memberFamily, Response::HTTP_CREATED, [], [
                'groups' => ['memberFamily_read'],
            ]);
        }
        
        $errorsString = (string) $form->getErrors(true);

        return $this->json([
            'errors' => $errorsString,
        ], Response::HTTP_BAD_REQUEST);
    }

}
