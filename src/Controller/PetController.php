<?php
/**
 * Created by PhpStorm.
 * User: 21629
 * Date: 15/01/2023
 * Time: 12:38 PM
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("pet")
 */
class PetController extends AbstractController
{

    /**
     * @Route("/", name="pets-list")
     */
    public function index(): Response
    {
        return $this->render('Account/pets/list_pets.html.twig');
    }

    /**
     * @Route("/ajout", name="pets-add")
     */
    public function ajout(): Response
    {
        return $this->render('Account/pets/ajout_pet.html.twig');
    }

    /**
     * @Route("/edit", name="pets-edit")
     */
    public function edit(): Response
    {
        return $this->render('Account/pets/edit_pets.html.twig');
    }

}
