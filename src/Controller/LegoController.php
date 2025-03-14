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
    public function home(LegoRepository $legoService, LegoCollectionRepository $legoCollection): Response
    {   
        $login = $this->generateUrl('lego_store_login');
        $logout = $this->generateUrl('lego_store_logout');
        if (!$this->getUser() || !in_array('ROLE_USER', $this->getUser()->getRoles())) {
            $legos = $legoService->findAllIsNotPremium();
        } else {
            $legos = $legoService->findAll();
        }
        if (!$this->getUser() || !in_array('ROLE_USER', $this->getUser()->getRoles())) {
            $collections = $legoCollection->findAllIsNotPremium();
        } else {
            $collections = $legoCollection->findAll();
        }
        return $this->render('lego.html.twig', [
            'legos' => $legos,
            'collections' => $collections,
            'login' => $login,
            'logout' => $logout
        ]);
    }

    #[Route('/collection/{id}', name: 'collection')]
    public function collection(LegoRepository $legoService, LegoCollectionRepository $legoCollection, string $id): Response
    {   
        $login = $this->generateUrl('lego_store_login');
        $logout = $this->generateUrl('lego_store_logout');
        $legos = $legoService->findAllByCollection($id);

        if (!$this->getUser() || !in_array('ROLE_USER', $this->getUser()->getRoles())) {
            $collections = $legoCollection->findAllIsNotPremium();
        } else {
            $collections = $legoCollection->findAll();
        }

        return $this->render('lego.html.twig', [
            'legos' => $legos,
            'collections' => $collections,
            'login' => $login,
            'logout' => $logout
        ]);
        
    }  
}  
// php bin/console debug:route affiche la liste des fonctions et de leurs routes respectives