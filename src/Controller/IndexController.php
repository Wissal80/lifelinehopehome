<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        
        return $this->render('base.html.twig');
    }
    

    #[Route('/home', name: 'app_home')]
    public function Home(): Response
    {
        
        return $this->render('base/home.html.twig');
    }
    
    #[Route('/about', name: 'app_about')]
    public function About(): Response
    {
        
        return $this->render('base/About.html.twig');
    }
    
     
    #[Route('/contact', name: 'app_contact')]
    public function Contact(): Response
    {
        
        return $this->render('base/Contact.html.twig');
    }

    
    

}
