<?php

class Node
{
    private $value;
    private $next;
    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;

    }

}