<?php

namespace App\Controller;

use App\Entity\Trips;
use App\Repository\TripsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
        $trips = $tripsRepository->findAll();

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
}
