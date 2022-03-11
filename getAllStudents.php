<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// Allows us to start using SESSION variables 
session_start();

// SQL Connection 
$dsn = ///////////
$username = //////////
$password = //////////
$db = new PDO($dsn,$username,$password);

// Selection fpr Program ID; Start Yearf;  from Students Table
$sql = "select id, name, program_id, start_year from students";
$data = $db->query($sql);

// send response indicating the number of records affected 
// which is JSON as API result
header("Content-type: application/json");
echo json_encode($data->fetchAll(PDO::FETCH_ASSOC));