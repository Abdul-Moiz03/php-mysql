<?php
$server="localhost";
$username="root";
$passowrd="";
$dbname="informationcollection";

$conn=new mysqli($server,$username,$passowrd,$dbname);
if ($conn->connect_error) {
    die("DataBase Not Connected".$conn->connect_error);
    
} 