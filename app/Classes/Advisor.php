<?php
namespace App\Classes;

class Advisor extends Person
{

    private $legalID;
    private $description;
    private $createdBy;

    public function __construct($legalID1,$name1,$email1,$telephone1,$description1)
    {
        $this->name =$name1;
        $this->email=$email1;
        $this->telephone=$telephone1;
        $this->legalID=$legalID1;
        $this->description=$description1;

    }

    /**
     * @return mixed
     */
    public function getLegalID()
    {
        return $this->legalID;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $legalID
     */
    public function setLegalID($legalID)
    {
        $this->legalID = $legalID;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }



}