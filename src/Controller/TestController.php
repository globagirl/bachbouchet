<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('visitor/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/invitini", name="invitini")
     */
    public function invitini(): Response
    {
        return $this->render('visitor/hotel/list_hotel.html.twig');
    }
    /**
     * @Route("/adoptini", name="adoptini")
     */
    public function adoptini(): Response
    {
        return $this->render('visitor/adoption/list_pets.html.twig');
    }
     /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('visitor/contact.html.twig');
    }
     /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        return $this->render('visitor/login.html.twig');
    }
    /**
     * @Route("/signup", name="signup")
     */
    public function signup(): Response
    {
        return $this->render('visitor/signup.html.twig');
    }
}
