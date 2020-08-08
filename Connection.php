<?php
$host="localhost";
$user="root";
$password="";
$database="Sis";
$con=mysqli_connect($host, $user, $password, $database);
if($con)
{
    $con_status='Server Online';
}
else
{
    $con_status='Server Online';
}
