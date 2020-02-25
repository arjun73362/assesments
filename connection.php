<?php
   try {
       $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
       $conn = new MongoDB\Driver\BulkWrite;
   } catch (MongoDB\Driver\Exception\Exception $e) {
       echo "Exception:", $e->getMessage(), "\n";
       echo "In file:", $e->getFile(), "\n";
       echo "On line:", $e->getLine(), "\n";      
   }
?>
