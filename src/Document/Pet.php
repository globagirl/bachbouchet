<?php/** * Created by PhpStorm. * User: khaoula * Date: 1/12/2023 * Time: 2:33 PM */namespace App\Document;use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;/** @ODM\Document */class Pet{    /** @ODM\Id */    private $id;    /** @ODM\Field(type="string") */    private $pseudo;    /** @ODM\Field(type="string") */    private $gender;    /** @ODM\Field(type="string") */    private $race;    /** @ODM\Field(type="string") */    private $color;    /** @ODM\Field(type="date") */    private $birthdate;    /** @ODM\Field(type="bool") */    private $vaccinated;    /** @ODM\Field(type="string") */    private $description;//    /** @ODM\Field(type="file") *///    private $picture;}