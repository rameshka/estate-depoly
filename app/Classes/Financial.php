<?php
/**
 * Created by PhpStorm.
 * User: Piyumi Rameshka
 * Date: 4/25/2017
 * Time: 5:34 AM
 */

namespace App\Classes;


class Financial
{


    private $lender;
    private $lenderID;
    private $name;
    private $amount;
    private $years;
    private $frequency;
    private $interest;
    private $contenturl;
    private $type;
    private $date;
    private $id;

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
     * Financial constructor.
     * @param $id
     * @param $lenderID
     * @param $name
     * @param $amount
     * @param $years
     * @param $frequency
     * @param $interest
     * @param $contenturl
     * @param $date
     */
    public function __construct( $lender, $name, $amount, $years, $frequency, $interest,$type)
    {
        $this->lender = $lender;
        $this->name = $name;
        $this->amount = $amount;
        $this->years = $years;
        $this->frequency = $frequency;
        $this->interest = $interest;
        $this->type = $type;

    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getLender()
    {
        return $this->lender;
    }

    /**
     * @param mixed $lenderID
     */
    public function setLender($lender)
    {
        $this->lender = $lender;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getYears()
    {
        return $this->years;
    }

    /**
     * @param mixed $years
     */
    public function setYears($years)
    {
        $this->years = $years;
    }

    /**
     * @return mixed
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param mixed $frequency
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * @return mixed
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * @param mixed $interest
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;
    }

    /**
     * @return mixed
     */
    public function getContenturl()
    {
        return $this->contenturl;
    }

    /**
     * @param mixed $contenturl
     */
    public function setContenturl($contenturl)
    {
        $this->contenturl = $contenturl;
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




}