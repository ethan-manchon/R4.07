<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\LegoService;

class LegoController extends AbstractController
{
    #[Route('/', name: 'home') ]
    public function home(LegoService $legoService): Response
        {   
            $lego = $legoService->getLegos();
            $responses = [];
            foreach ($lego as $item) {
                $responses[] = $this->render('lego.html.twig', [
                    'lego' => $item
                ])->getContent();
            }
            return new Response(implode('', $responses));
        }

    #[Route('/{category}', name: 'filtered_by_category', requirements: ['category' => 'creator|star_wars|creator_expert'])]
    public function filtered_by_category(LegoService $legoService, $category): Response
        {   
            if ($category == "creator") {
                $category = "Creator";
            } elseif ($category == "star_wars") {
                $category = "Star Wars";
            } elseif ($category == "creator_expert") {
                $category = "Creator Expert";
            }
            $lego = $legoService->getLegosbyCollection($category);
            $responses = [];
            foreach ($lego as $item) {
                $responses[] = $this->render('lego.html.twig', [
                    'lego' => $item
                ])->getContent();
            }   
            return new Response(implode('', $responses));
        }
}   

// php bin/console debug:route affiche la liste des fonctions et de leurs routes respectives