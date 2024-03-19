<?php
include "connection.php";

$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Hand_Antiseptic = $_POST['Hand_Antiseptic'];
$Symptoms = $_POST['Symptoms'];
$Temperature =  $_POST['Temperature'];
$Contact =  $_POST['Contact'];
$Additional_Notes = $_POST["Additional_Notes"];
$status = 1;
$created_date = date('Y-m-d h:i:s');

$query = "UPDATE FROM data SET First_Name = '$First_Name', Last_Name='$Last_Name', Hand_Antiseptic='$Hand_Antiseptic', Symptoms='$Symptoms', Temperature='$Temperature',Contact='$Contact',Additional_Notes='$Additional_Notes', WHERE id = $id";

$executeQuery = $connection->query($query);
if ($executeQuery) {
    header("Location: table.php?msg=ID $id updated");
    //echo "Record Inserted Successfully";
} else {
    header("Location: edit.php?msg=You have some errors in your form data");
}
