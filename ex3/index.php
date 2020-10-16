<?php
include_once 'Queue.php';
include_once 'Patient.php';

$patient=new Queue();
$patient->addPatient('Hùng',3);
$patient->addPatient('Hùn',1);
$patient->addPatient('Hoa',4);
$patient->addPatient('Huc',5);
$patient->addPatient('Honda',2);
$patient->addPatient('Hoan',6);
$patient->sort();
$patient->deQueue();
print_r($patient);