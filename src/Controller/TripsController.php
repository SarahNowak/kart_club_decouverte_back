<?php

namespace App\Controller;

use App\Entity\Trips;
use App\Form\TripsType;
use App\Repository\TripsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/trips", name="api_trips_")
 */
class TripsController extends AbstractController
{
    
    /**
     * @Route("", name="browse", methods={"GET"})
     */
    public function browse(TripsRepository $tripsRepository): Response
    {
        $trips = $tripsRepository->findBy(['status' => 1], ['createdAt' => 'DESC']);

        return $this->json($trips, Response::HTTP_OK, [],[
            'groups' => ['trips_browse']
        ]);
    }

    /**
     * @Route("/{id}", name="read", methods={"GET"}, requirements={"id"="\d+"})
     */
    public function read(Trips $trips)
    {
        return $this->json($trips, Response::HTTP_OK, [],[
            'groups' => ['trips_read']
        ]);
    }

    /**
     * @Route("", name="add", methods={"POST"})
     */
    public function add(Request $request)
    {
        $trips = new Trips;
        $form = $this->createForm(TripsType::class, $trips, ['csrf_protection' => false]);
        $json = $request->getContent();
        $jsonArray = json_decode($json, true);
        $form->submit($jsonArray);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trips);
            $em->flush();

            return $this->json($trips, Response::HTTP_CREATED, [], [
                'groups' => ['trips_read'],
            ]);
        }
       
        $errorsString = (string) $form->getErrors(true);
        
        return $this->json([
            'errors' => $errorsString,
        ], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Methode permettant d'inscrire un utilisateur à une sortie'
     * 
     * @Route("/subscribe/{id}", name="add_subscribe", methods={"POST"}, requirements={"id"="\d+"})
     */
    public function addSubscribe(Trips $trips)
    {   
        if(!$trips){
            throw new NotFoundHttpException('Pas de sortie trouvée');
        }
        $trips->addUser($this->getUser());
        $em = $this->getDoctrine()->getManager();
        $em->persist($trips);
        $em->flush();

        return $this->json($trips, Response::HTTP_CREATED, [], [
            'groups' => ['user_trips'],
        ]);
    }

    /**
     * @Route("/subscribe/{id}", name="delete_subscribe", methods={"DELETE"}, requirements={"id"="\d+"})
     */
    public function deleteSubscribe(Trips $trips)
    {
        if(!$trips){
            throw new NotFoundHttpException('Pas de sortie trouvée');
        }
        $trips->removeUser($this->getUser());
        $em = $this->getDoctrine()->getManager();
        $em->persist($trips);
        $em->flush();

        return $this->json(null, Response::HTTP_NO_CONTENT);
    }
}
