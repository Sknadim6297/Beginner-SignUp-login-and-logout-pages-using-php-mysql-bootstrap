<?php
$username = "root";
$password = "";
$hostname= 'localhost';
$database='student';

$con=mysqli_connect($hostname,$username,$password,$database);

if(!$con){
    die (mysqli_connect_error());
}

?>