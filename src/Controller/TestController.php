<?php

namespace App\Controller;

use App\Document\Produit;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{


    /**
     * @Route("/affiche")
     */
    public function affiche(DocumentManager $documentManager)
    {
        $user = $documentManager->getRepository(Produit::class)->findAll();
        return $this->render("affiche.html.twig",[
            "produit"=>$user
        ]);
    }

    /**
     * @Route("/ajout", methods={"GET"})
     */
    public function ajouter(DocumentManager $dm)
    {

        $produit = new Produit();
        $produit->setNom("Smartphone");
        $produit->setMarque("Apple");
        $produit->setQte("150");
//        $produit->setDateFab("15/02/2023");
        $produit->setPrix(6500);


        $dm->persist($produit);
        $dm->flush();
//        return new JsonResponse(['Status' => 'OK']);

        return new Response("ok :)");
    }


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
