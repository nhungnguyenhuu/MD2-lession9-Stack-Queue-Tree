<?php
include_once "Queue.php";

$queue = new Queue();

$queue->enQueue(1);
$queue->enQueue(3);
$queue->enQueue(5);
$queue->deQueue();

print_r($queue->queues);