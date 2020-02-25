<?php
ini_set("display_errors", 1);
include "connection.php";
?>
<!DOCTYPE HTML>  
<html>
    <head>
        <title>form</title>
        <style>
            table{
                width:80%;
                border:1px solid red;
                text-align: center;
                margin: 0 auto;
                background-color: green;
            }
        </style>
    </head>
<body>  
    <?php
        $conn = new MongoDB\Driver\Query([], []);
        $data1 = $manager->executeQuery('bootcamp.mongo', $conn);
        if($data1)
        {
    ?>
            <br><br>
            <table>
                <tbody>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
    <?php
            foreach($data1 as $value) 
            {
    ?>
                <tr>
                <td> <?php echo $value->name; ?> </td>
                <td> <?php echo $value->email; ?> </td>
                <td> <?php echo $value->mobile; ?> </td>
                <td> <a href="update.php?name=<?php echo $value->name ?>">update</a> </td>
                <td> <a href="delete.php?name=<?php echo $value->name ?>">Delete</a> </td>
                </tr>
    <?php
            }
    ?>
                </tbody>
            </table>
    <?php
        }
    ?>
</body>
</html>
