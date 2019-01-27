<?php

include_once "function.php";

class Document
{
    private $date;

    protected $id;

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

    public function formatId()
    {
        return "0" . $this->id;
    }
}

class Invoice extends Document
{
    private $amount;

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


    public function formatId()
    {
        return "00" . $this->id;
    }
}

class Delivery extends Document
{
    private $weight;

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}

$p = new Document(); //instance of parent class
$p->setDate(new DateTime());
$p->setId(1);
echo $p->formatId();
ipalog($p);


$p = new Invoice();
$p->setDate(new DateTime()); //class Document
$p->setId(2); //class Document
$p->setAmount(20000); //class Invoice
ipalog($p);

$p = new Delivery();
$p->setDate(new DateTime()); //class Document
$p->setId(3);//class document
$p->getWeight(23); //class Delivery
echo $p->formatId();
ipalog($p);