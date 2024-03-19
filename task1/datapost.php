<?php

include "connection.php";

$First_Name = $_POST["First_Name"];
$Last_Name = $_POST["Last_Name"];
$Hand_Antiseptic =  $_POST["Hand_Antiseptic"];
$Symptoms = $_POST["Symptoms"];
$Temperature = $_POST["Temperature"];
$Contact = $_POST["Contact"];
$Additional_Notes = $_POST["Additional_Notes"];

$sql = "INSERT INTO data (First_Name, Last_Name, Hand_Antiseptic, Symptoms, Temperature,Contact,Additional_Notes) VALUES ('$First_Name', '$Last_Name', '$Hand_Antiseptic', '$Symptoms', '$Temperature','$Contact','$Additional_Notes')";

$rs = $connection->query($sql);

if ($rs) {
	echo "Contact Records Inserted";
}
