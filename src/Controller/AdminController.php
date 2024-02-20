<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    
    #[Route('/back', name: 'app_back')]
    public function back(): Response
    {
        
        return $this->render('base-back.html.twig');
    }
    #[Route('/User', name: 'app_user')]
    public function listUsers(): Response
    {
        // Récupérer tous les utilisateurs depuis la base de données
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        // Passer les utilisateurs récupérés à la vue
        return $this->render('listusers.html.twig'
        );
    }
    



}
