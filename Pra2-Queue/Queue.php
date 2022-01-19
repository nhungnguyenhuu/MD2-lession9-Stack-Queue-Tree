<?php

class Queue
{
    public $queues;
    public function __construct()
    {
        $this->queues = [];
    }
    public function enQueue($item)
    {
        array_push($this->queues, $item);
    }
    public function deQueue()
    {
        return array_shift($this->queues);

    }
    public function size()
    {
        return count($this->queues);
    }
    public function isEmpty()
    {
        return empty($this->queues);
    }

}