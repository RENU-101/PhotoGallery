<?php
$server="localhost";
$username="root";
$password="strenu101";
$database="strenu_photography";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("Error".mysqli_connect_error());
}
?>
