<?php
include_once 'Queue.php';
include_once 'Node.php';

$queue=new Queue();
$queue->enQueue(3);
$queue->enQueue(5);
$queue->enQueue(7);
$queue->deQueue();
$queue->deQueue();

var_dump($queue->isEmpty());