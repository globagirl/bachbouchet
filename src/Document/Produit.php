<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
/**
 * @MongoDB\Document
 */
class Produit
{

    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $nom;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $marque;

    /**
     * @MongoDB\Field(type="integer")
     */
    protected $qte;

    /**
     * @MongoDB\Field(type="date")
     */
    protected $datefab;

    /**
     * @MongoDB\Field(type="integer")
     */
    protected $prix;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param mixed $qte
     */
    public function setQte($qte): void
    {
        $this->qte = $qte;
    }

    /**
     * @return mixed
     */
    public function getDatefab()
    {
        return $this->datefab;
    }

    /**
     * @param mixed $datefab
     */
    public function setDatefab($datefab): void
    {
        $this->datefab = $datefab;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }


}
//    /**
//     * @MongoDB\ReferenceMany(targetDocument=Produit::class, mappedBy="user")
//     */
//    private $produit;
//
//    public function __construct()
//    {
//        $this->produit = new \Doctrine\Common\Collections\ArrayCollection();
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getProduit():Collection
//    {
//        return $this->produit;
//    }
//
//    /**
//     * @param mixed $produit
//     */
//    public function setProduit($produit): void
//    {
//        $this->produit[] = $produit;
//    }