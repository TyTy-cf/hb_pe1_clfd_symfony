<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_index")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
//            'coucou' => 'Coucou : c\'est la reprise !!!!!!!',
        ]);
    }

    /**
     * @Route("/ranks", name="display_ranks")
     */
    public function displayRanks(): Response
    {
        return $this->render('home/display_ranks.html.twig', [
            'ranks' => [9, 15, 14, 16, 18, 13],
        ]);
    }
}
