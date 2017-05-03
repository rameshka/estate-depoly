<?php
/**
 * Created by PhpStorm.
 * User: Piyumi Rameshka
 * Date: 4/17/2017
 * Time: 6:50 PM
 */

namespace App\Classes;


class Eproperty
{
    private $city;
    private $beds;
    private $baths;
    private $landarea;
    private $floorarea;
    private $telephone;
    private $price;
    private $hnumber;
    private $street;
    private $closecity;
    private $longitude;
    private $latitude;
    private $des;
    private $sellerID;
    private $propertyID;
    private $date;
    private $sellerName;
    private $plan;






 public function __construct($cit,$bed,$bath,$land,$floor,$tele,$pri,$number,$strt,$clsecity,$sell,$longi,$lati,$desc,$plan)
 {
    $this->city =$cit;
    $this->beds=$bed;
    $this->baths=$bath;
    $this->landarea=$land;
    $this->floorarea=$floor;
    $this->telephone=$tele;
    $this->price=$pri;
    $this->number=$number;
    $this->hnumber=$number;
    $this->street=$strt;
    $this->closecity=$clsecity;
    $this->sellerID=$sell;
    $this->longitude=$longi;
    $this->latitude=$lati;
    $this->des=$desc;
    $this->plan=$plan;

 }

    /**
     * @return mixed
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param mixed $plan
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
    }

    /**
     * @return mixed
     */
    public function getSellerName()
    {
        return $this->sellerName;
    }

    /**
     * @param mixed $sellerName
     */
    public function setSellerName($sellerName)
    {
        $this->sellerName = $sellerName;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
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
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPropertyID()
    {
        return $this->propertyID;
    }

    /**
     * @param mixed $propertyID
     */
    public function setPropertyID($propertyID)
    {
        $this->propertyID = $propertyID;
    }

    /**
     * @return mixed
     */
    public function getBeds()
    {
        return $this->beds;
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

    /**
     * @param mixed $beds
     */
    public function setBeds($beds)
    {
        $this->beds = $beds;
    }

    /**
     * @return mixed
     */
    public function getBaths()
    {
        return $this->baths;
    }

    /**
     * @param mixed $baths
     */
    public function setBaths($baths)
    {
        $this->baths = $baths;
    }

    /**
     * @return mixed
     */
    public function getLandarea()
    {
        return $this->landarea;
    }

    /**
     * @param mixed $landarea
     */
    public function setLandarea($landarea)
    {
        $this->landarea = $landarea;
    }

    /**
     * @return mixed
     */
    public function getFloorarea()
    {
        return $this->floorarea;
    }

    /**
     * @param mixed $floorarea
     */
    public function setFloorarea($floorarea)
    {
        $this->floorarea = $floorarea;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getHnumber()
    {
        return $this->hnumber;
    }

    /**
     * @param mixed $hnumber
     */
    public function setHnumber($hnumber)
    {
        $this->hnumber = $hnumber;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getClosecity()
    {
        return $this->closecity;
    }

    /**
     * @param mixed $closecity
     */
    public function setClosecity($closecity)
    {
        $this->closecity = $closecity;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * @param mixed $des
     */
    public function setDes($des)
    {
        $this->des = $des;
    }



}