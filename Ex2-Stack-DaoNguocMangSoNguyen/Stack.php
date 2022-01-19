<?php

class Stack
{
    public $stacks;
    public function __construct()
    {
        $this->stacks = [];
    }
    public function push($item)
    {
        $this->stacks[] = $item;
    }
    public function top()
    {
        return array_pop($this->stacks);
    }
}