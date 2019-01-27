<?php
include_once "function.php";

//Class is a blueprint of object

class Person
{
    //not acording to OOP encapsulation principle

    public $name;
    public $active;
    public $income;
}

//Objest is instance of class

$p = new Person();
$p->name = 'Filip Pavlović';
$p->active = true;
$p->income = 855.88;

ipalog($p);