<?php

class Remainder
{
    public $remainders;

    public function __construct()
    {
        $this->remainders = [];
    }
    public function push($item)
    {
        $this->remainders[] = $item;
    }

    public function getRemainder()
    {
        return $this->remainders;
    }
    public function top()
    {
        return array_pop($this->remainders);
    }


}