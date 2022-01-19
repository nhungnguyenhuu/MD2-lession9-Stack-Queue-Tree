<?php

class Stack
{
    private $stack;
    private $limit;
    private $count;
    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->stack = [];
        $this->count = 0;
    }
    public function push($item)
    {
        if($this->isEmpty()){
            $this->count++;
            return $this->stack[]= $item;
        }else{
            return "Day mat tieu roai!";
        }


    }
    public function getStack()
    {
        return $this->stack;
    }

    public function pop()
    {
        return array_pop($this->stack, $this->stack[$this->count-1]);
    }
    public function top()
    {
        return $this->stack[$this->count-1];
    }
    public function isEmpty()
    {
        if($this->count ==0){
            return true;
        }else{
            return false;
        }

    }

}