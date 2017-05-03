<?php
namespace App\Classes;

class Buyer extends Person
{

    protected $buyerID;


    public function __construct($name1,$email1)
    {
        $this->name =$name1;
        $this->email=$email1;


    }

    /**
     * @return mixed
     */
    public function getBuyerID()
    {
        return $this->buyerID;
    }

    /**
     * @param mixed $buyerID
     */
    public function setBuyerID($buyerID)
    {
        $this->buyerID = $buyerID;
    }



}