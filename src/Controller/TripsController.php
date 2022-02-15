<?php

namespace App\Controller;

use App\Entity\Trips;
use App\Form\TripsType;
use App\Repository\TripsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
}
