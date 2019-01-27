<?php
 include_once "../function.php";

 interface IdFormatter{
     public function formatId();
 }

 abstract class Document implements IdFormatter
 {
     private $date;
     protected $id;
     public function getDate()
     {
         return $this->date;
     }
     public function setDate($date)
     {
         $this->date = $date;
     }
     public function getId()
     {
         return $this->id;
     }
     public function setId($id)
     {
         $this->id = $id;
     }
 }
class Invoice extends Document
{
    private $amount;
    public function getAmount()
    {
        return $this->amount;
    }
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    //overrides behavior in parrent class
    public function formatID()
    {
        return "00" . $this->id; //I can see this property in child class without get set
    }
}
class Delivery extends Document
{
    private $weight;
    public function getWeight()
    {
        return $this->weight;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public function formatId()
    {
        return "0" . $this->id;
    }
}

$document = [];

$p = new Invoice();
$p->setDate(new DateTime());
$p->setId(2);
$p->setAmount(2000);
$document[] = $p;

$p = new Delivery();
$p->setDate(new DateTime());
$p->setId(3);
$p->getWeight(23);
$document[] =  $p;

function printoutFormatsID(array $document)
{
    foreach ($document as $d){
        echo $d->formatId(), "<br>";
    }
}

printoutFormatsID($document);