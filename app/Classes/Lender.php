<?php
namespace App\Classes;

class Lender extends  Person
{
    private $lenderID;
    private $description;
    private $createdBy;


    public function __construct($lenderID1,$name1,$email1,$telephone1,$description1)
    {
        $this->name =$name1;
        $this->email=$email1;

        $this->telephone=$telephone1;
        $this->lenderID=$lenderID1;
        $this->description=$description1;

    }

    /**
     * @return mixed
     */
    public function getLenderID()
    {
        return $this->lenderID;
    }

    /**
     * @param mixed $lenderID
     */
    public function setLenderID($lenderID)
    {
        $this->lenderID = $lenderID;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
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