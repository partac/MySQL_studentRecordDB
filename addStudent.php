<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// Allows us to start using SESSION variables 
session_start();

// SQL Connection
$dsn = ///////////;
$username = /////////;
$password = ////////;
$db = new PDO($dsn,$username,$password);

// use HTTP GET to recieve data for:
// name, program_id, and start_year
$name = $_GET["name"];
$program_id = $_GET["program_id"];
$start_year = $_GET["start_year"];

// Insert a new record into the students table 
// with the values above
$sql = "insert into students (name, program_id, start_year) values ('$name', $program_id, $start_year)";
$n = $db->exec($sql);

// send response indicating the number of records affected 
// which is in $n
header("Content-type: text/plain");
echo $n;