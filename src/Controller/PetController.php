<?php
/**
 * Created by PhpStorm.
 * User: 21629
 * Date: 15/01/2023
 * Time: 12:38 PM
 */

namespace App\Controller;
use App\Document\Pet;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function index(DocumentManager $dm): Response
    {
        return $this->render('Account/pets/list_pets.html.twig');
    }

    /**
     * @Route("/ajout", name="pets-add")
     * @throws \Doctrine\ODM\MongoDB\MongoDBException
     */
    public function ajout(Request $request, DocumentManager $dm)
    {
        $pet=new Pet();
        $form = $this->createForm('App\Form\PetType', $pet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
//            var_dump($pet);
            $dm->persist($pet);
            $dm->flush();

                $this->addFlash(
                    'notice',
                    'Pet added successfully ! '
                );

            return $this->redirect($this->generateUrl('pets-list'));
        }
        return $this->render('Account/pets/ajout_pet.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/edit", name="pets-edit")
     */
    public function edit(): Response
    {
        return $this->render('Account/pets/edit_pets.html.twig');
    }

}
