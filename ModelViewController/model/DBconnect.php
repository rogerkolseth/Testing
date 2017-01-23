<?php


 require_once("Cars.php");

//connection to the database
$dbConn = new PDO('mysql:host=localhost;dbname=test;charset=utf8mb4', 'root', 'Tafjord123');

// Create data models
$cars = new Cars($dbConn);
// TODO - create new models here. First create them as a new class
// TODO - once you have more model classes, perhaps some of the functions can be moved to a common parent class?