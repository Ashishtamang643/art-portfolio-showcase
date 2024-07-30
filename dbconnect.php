<?php

$server="localhost";
$username="root";
$password="";
$database="art portfolio showcase";

$con=new mysqli($server,$username,$password,$database);

if($con->connect_error){
    die("connection.failed");
}
else{
    echo("connection successful");
}




?>