<?php
include "connection.php";
$name1=$_GET['name'];
$conn->delete(['name' => $name1]);
$manager->executeBulkWrite('bootcamp.mongo', $conn);
if($manager)
        {
          header("Location: display.php");
        }
        else{
          echo "can't be deleted";
        }
?>
