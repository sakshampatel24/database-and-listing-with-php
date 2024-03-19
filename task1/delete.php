​<?php
include "connection.php";
if (isset($_GET['id'])) {
    $stu_id = $_GET['id'];
    $sql = "DELETE FROM data WHERE id ='$stu_id'";
     $result = $connection->query($sql);
     if ($result == TRUE) {
        echo '<div class="alert alert-success" role="alert">Record deleted successfully.</div>';
        header('Location: table.php');
    }else{
        echo "Error:" . $sql . "<br>" . $connection->error;
    }
}
?>