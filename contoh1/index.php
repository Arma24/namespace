<?php
include_once 'Smartphone.php';
include_once 'Asus/Smartphone.php';
include_once 'Iphone/Smartphone.php';
include_once 'Xiaomi/Smartphone.php';

$Smartphone = new \Smartphone;
$Smartphone->powerOn();

$Asus = new \Asus\Smartphone;
$Asus->powerOn();

$Iphone = new \Iphone\Smartphone;
$Iphone->powerOn();

$Xiaomi = new \Xiaomi\Smartphone;
$Xiaomi->powerOn();
?>