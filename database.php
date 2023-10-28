<?php

$connect = mysqli_connect("localhost", "root", "", "shout_it");

if(mysqli_connect_errno()){
    echo "Failed connected to MySQL: " . mysqli_connect_error();
} else{
    echo "Good job!";
}



?>
