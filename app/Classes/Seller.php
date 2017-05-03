<?php
namespace App\Classes;

class Seller extends Buyer
{

    private $sellerID;

    public function __construct($name1,$email1,$telephone1, $buyerID1)
    {
        $this->name =$name1;
        $this->email=$email1;
        $this->buyerID = $buyerID1;
        $this->telephone=$telephone1;


    }

    /**
     * @return mixed
     */
    public function getSellerID()
    {
        return $this->sellerID;
    }

    /**
     * @param mixed $sellerID
     */
    public function setSellerID($sellerID)
    {
        $this->sellerID = $sellerID;
    }

}