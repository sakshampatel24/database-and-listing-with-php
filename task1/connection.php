<?php

$connection = mysqli_connect('localhost','root','','form3');

if(empty($connection)){
    die("Could not connect to database");
}