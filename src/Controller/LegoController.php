<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\LegoRepository;
use App\Entity\LegoCollection;
use App\Repository\LegoCollectionRepository;
use App\Repository\UserRepository;

class LegoController extends AbstractController
{

    #[Route('/', name: 'home') ]
    public function home(LegoRepository $legoService, LegoCollectionRepository $legoCollectionRepository): Response
    {   
        $login = $this->generateUrl('lego_store_login');
        $logout = $this->generateUrl('lego_store_logout');
        $legos = $legoService->findAll();
        $collections = $legoCollectionRepository->findAll();
        return $this->render('lego.html.twig', [
            'legos' => $legos,
            'collections' => $collections,
            'login' => $login,
            'logout' => $logout
        ]);
    }
    #[Route('/collection/{id}', name: 'collection')]
    public function collection(LegoRepository $legoService, LegoCollectionRepository $legoCollectionRepository, string $id): Response
    {   
        $login = $this->generateUrl('lego_store_login');
        $logout = $this->generateUrl('lego_store_logout');
        $legos = $legoService->findAllByCollection($id);
        $collections = $legoCollectionRepository->findAll();
        return $this->render('lego.html.twig', [
            'legos' => $legos,
            'collections' => $collections,
            'login' => $login,
            'logout' => $logout
        ]);
        }  
}
                // Le mot de passe du User c'est Bonjour
                // Le mot de passe du User c'est Bonjour
                // Le mot de passe du User c'est Bonjour
                // Le mot de passe du User c'est Bonjour
                // Le mot de passe du User c'est Bonjour
                // Le mot de passe du User c'est Bonjour
                // Le mot de passe du User c'est Bonjour
                // Le mot de passe du User c'est Bonjour



    // #[Route('/category/{category}', name: 'filtered_by_category')]
    // public function filtered_by_category(LegoRepository $legoService, string $category): Response
    // {   
    //     $lego = $legoService->findAllByCollection($category);
    //     $responses = [];
    //     foreach ($lego as $item) {
    //         $responses[] = $this->render('lego.html.twig', [
    //             'lego' => $item
    //         ])->getContent();
    //     }   
    //     return new Response(implode('', $responses));
    // }


// php bin/console debug:route affiche la liste des fonctions et de leurs routes respectives