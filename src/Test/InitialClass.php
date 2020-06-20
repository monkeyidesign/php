<?php namespace App\Test;

class InitialClass
{
    public $name;
    protected $fee;

    public function __construct($fee)
    {
        $this->fee = $fee;
    }
    public function setFee($fee)
    {
        $this->fee = $fee;
    }

    /**
     * @return mixed
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

}