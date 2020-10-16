<?php
include_once 'Stack.php';

$stack1=new Stack();
$stack1->add(2);
$stack1->add(3);
$stack1->add(4);
$stack1->add(5);
$stack1->delete();
var_dump($stack1->top());