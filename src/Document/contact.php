<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document
 * MongoDB\Unique(fields="Id")
 */
class contact
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /** @MongoDB\Field(type="string") */
    private $address;

    /** @MongoDB\Field(type="string") */
    private $city;

    /** @MongoDB\Field(type="string") */
    private $zipcode;

    /** @MongoDB\Field(type="string") */
    private $phone;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param mixed $zipcode
     */
    public function setZipcode($zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

}
