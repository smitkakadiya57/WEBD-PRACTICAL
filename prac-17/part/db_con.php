<?php


$server="localhost";
$username="root";
$password="";
$database="prac_17";

$conn=mysqli_connect($server,$username,$password,$database);

if($conn){
    
}else{
    die("Error". mysqli_connect_error());
}

?>
