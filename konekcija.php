<?php

include 'Proizvodjac.php';
include 'Telefon.php';
include 'dbbroker.php';

$mysqli= new Mysqli('localhost','root','','iteh-php');

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$mysqli->set_charset('utf8');

$baza = new dbbroker($mysqli);
$db=new Telefon(null, null, null, null, null, $mysqli);
