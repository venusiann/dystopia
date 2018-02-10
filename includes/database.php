<?php

/*
*
* @package Dystopia
* @author Chantal Bakker
* @version 0.1
*
*/

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'avatar';

$conn = new mysqli($host, $username, $password, $database);

if($conn->connect_error)
{
  exit('Could not connect to database');
}

?>
