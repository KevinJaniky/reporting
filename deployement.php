<?php

require_once 'autoload.php';
$user = new User();
if (!$user->isConnected()) {
    header('location:index.php');
    die();
}

$dep = new Deployement();
$dep->createTable();
$dep->seederTable();

header('location:dashboard.php');