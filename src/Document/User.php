<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

use Doctrine\Bundle\MongoDBBundle\Validator\Constraints\Unique as MongoDBUnique;

use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ODM\MappedSuperclass
 * @MongoDBUnique(fields="email")
 */
class User implements UserInterface
{
    /** @ODM\Id */
    protected $id;

    /**
     * @ODM\Field(type="string")
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string The hashed password
     * @ODM\Field(type="string")
     */
    private $password;

    /** @ODM\Field(type="collection") */
    private $roles = [];

    /** @ODM\Field(type="string") */
    private $name;

    /** @ODM\Field(type="date") */
    private $joined_at;

    /** @ODM\EmbedOne(targetDocument=contact::class) */
    private $contact;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = sha1($password);

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact): void
    {
        $this->contact = $contact;
    }

    /**
     * @return mixed
     */
    public function getJoinedAt()
    {
        return $this->joined_at;
    }

    /**
     * @param mixed $joined_at
     */
    public function setJoinedAt($joined_at): void
    {
        $this->joined_at = $joined_at;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}



/** @ODM\Document */
class Hebergeur extends User
{
    /** @ODM\ReferenceMany(targetDocument=invitationoffer::class) */
    private $invitationoffer;
}

/**
 * @ODM\EmbeddedDocument
 */
class contact
{
    /** @ODM\Id */
    protected $id;

    /** @ODM\Field(type="string") */
    private $address;

    /** @ODM\Field(type="string") */
    private $city;

    /** @ODM\Field(type="string") */
    private $zipcode;

    /** @ODM\Field(type="string") */
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