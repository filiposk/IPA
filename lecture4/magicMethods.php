<?php


class Checkout
{
    private $data;

    public function __get($key)
    {
        return array_key_exists($key, $this->data) ? $this->data[$key] : "undefined key";
    }

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }
}

$p = new Checkout();
$p->user = 'Filip';
$p->amount = 233;

echo "user " . $p->user . " spend" . $p->amount;

class Invoice
{
    private $amount;

    public function __construct()
    {
        $this->amount = 0.00;
    }

    public function __get($name)
    {
        return isset($this->$name) ? $this->$name : null;
    }

    public function __set($name, $value)
    {
       $this->$name = $value;
    }

    public function __call($name, $arguments)
    {

        $function = substr($name, 0, 3);
        if ($function === 'set') {
            $this->__set(substr($name, 3), $arguments[0]);
            return $this;
        } else if ($function === 'get') {
            return $this->__get(substr($name, 3));
        } else {
            trigger_error("Call to undefined method");
        }
    }
}

echo '<hr>';

$p = new Invoice(9.99);

$p = new stdClass();
$p->user = 'Filip';
$p->amount = 33;

echo "user " . $p->user . " spend " . $p->amount;