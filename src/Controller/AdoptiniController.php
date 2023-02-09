<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("Adoptini")
 */
class AdoptiniController extends AbstractController
{

    /**
     * @Route("/", name="offer-list")
     */
    public function index(): Response
    {
        return $this->render('Account/Adoptini/list.html.twig');
    }

    /**
     * @Route("/ajout", name="offer-add")
     */
    public function ajout(): Response
    {
        return $this->render('Account/Adoptini/ajout.html.twig');
    }

    /**
     * @Route("/edit", name="offer_edit")
     */
    public function edit(): Response
    {
        return $this->render('Account/Adoptini/edit.html.twig');
    }

}
