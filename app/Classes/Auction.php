<?php
/**
 * Created by PhpStorm.
 * User: Dilshan
 * Date: 3/28/2017
 * Time: 12:34 AM
 */

namespace App\Classes;


class Auction
{

    private $createdBy;
    private $place;
    private $time;
    private $sDate;
    private $eDate;
    private $reg;

    public function __construct($createdBy1, $place1, $time1, $sDate1, $eDate1, $reg)
    {
        $this->createdBy = $createdBy1;
        $this->place = $place1;
        $this->time = $time1;
        $this->sDate = $sDate1;
        $this->eDate = $eDate1;
        $this->reg = $reg;

    }/**
 * @return mixed
 */
public function getReg()
{
    return $this->reg;
}/**
 * @param mixed $reg
 */
public function setReg($reg)
{
    $this->reg = $reg;
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
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getSDate()
    {
        return $this->sDate;
    }

    /**
     * @param mixed $sDate
     */
    public function setSDate($sDate)
    {
        $this->sDate = $sDate;
    }

    /**
     * @return mixed
     */
    public function getEDate()
    {
        return $this->eDate;
    }

    /**
     * @param mixed $eDate
     */
    public function setEDate($eDate)
    {
        $this->eDate = $eDate;
    }




}