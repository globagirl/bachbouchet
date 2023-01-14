<?php/** * Created by PhpStorm. * User: khaoula * Date: 1/12/2023 * Time: 2:33 PM */namespace App\Document;use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;/** @ODM\Document */class Pet{    /** @ODM\Id */    private $id;    /** @ODM\Field(type="string") */    private $pseudo;    /** @ODM\Field(type="string") */    private $gender;    /** @ODM\Field(type="string") */    private $race;    /** @ODM\Field(type="string") */    private $color;    /** @ODM\Field(type="date") */    private $birthdate;    /** @ODM\Field(type="bool") */    private $vaccinated;    /** @ODM\Field(type="string") */    private $description;    /**     * @return mixed     */    public function getId()    {        return $this->id;    }    /**     * @return mixed     */    public function getPseudo()    {        return $this->pseudo;    }    public function setPseudo($pseudo): string    {        Return $this->pseudo = $pseudo;    }    public function getGender()    {        return $this->gender;    }    public function setGender($gender)    {         $this->gender = $gender;    }    /**     * @return mixed     */    public function getRace()    {        return $this->race;    }    /**     * @param mixed $race     */    public function setRace($race): void    {        $this->race = $race;    }    /**     * @return mixed     */    public function getColor()    {        return $this->color;    }    /**     * @param mixed $color     */    public function setColor($color): void    {        $this->color = $color;    }    /**     * @return mixed     */    public function getBirthdate()    {        return $this->birthdate;    }    /**     * @param mixed $birthdate     */    public function setBirthdate($birthdate): void    {        $this->birthdate = $birthdate;    }    /**     * @return mixed     */    public function getVaccinated()    {        return $this->vaccinated;    }    /**     * @param mixed $vaccinated     */    public function setVaccinated($vaccinated): void    {        $this->vaccinated = $vaccinated;    }    /**     * @return mixed     */    public function getDescription()    {        return $this->description;    }    /**     * @param mixed $description     */    public function setDescription($description): void    {        $this->description = $description;    }//    /** @ODM\Field(type="file") *///    private $picture;}