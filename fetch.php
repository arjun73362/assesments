<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "Root@123";
try {
    $conn = new PDO("mysql:host=$servername;dbname=hello", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    $characters=$conn->query("select * from test WHERE name REGEXP '^[a-z]';")->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <h1>1.select * from test WHERE name REGEXP '^[a-z]';</h1>
	<table>
		<tbody>
			<tr>
				<th>Name</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Address</th>
			</tr>
	<?php
    foreach ($characters as $character) 
    {
    	?>
	  	<tr>
		<td> <?php echo $character['name']; ?> </td>
		<td> <?php echo $character['contact']; ?> </td>
		<td> <?php echo $character['email']; ?> </td>
		<td> <?php echo $character['address']."<br><br>"; ?> </td>
		</tr>
		<?php
	}
	?>
		</tbody>
	</table>
	<?php
	$characters=$conn->query("select * from test WHERE email REGEXP '^[a-zA-Z0-9_.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$';")->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <h1>2.select * from test WHERE email REGEXP '^[a-zA-Z0-9_.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$';</h1>
	<table>
		<tbody>
			<tr>
				<th>Name</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Address</th>
			</tr>
	<?php
    foreach ($characters as $character) 
    {
    	?>
	  	<tr>
		<td> <?php echo $character['name']; ?> </td>
		<td> <?php echo $character['contact']; ?> </td>
		<td> <?php echo $character['email']; ?> </td>
		<td> <?php echo $character['address']."<br><br>"; ?> </td>
		</tr>
		<?php
	}
	?>
		</tbody>
	</table>
	<?php
	$characters=$conn->query("select * from test WHERE contact REGEXP '^[1]{1}[0-9]{5,8}(0|1)$';")->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <h1>3.select * from test WHERE contact REGEXP '^[1]{1}[0-9]{5,8}(0|1)$';</h1>
	<table>
		<tbody>
			<tr>
				<th>Name</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Address</th>
			</tr>
	<?php
    foreach ($characters as $character) 
    {
    	?>
	  	<tr>
		<td> <?php echo $character['name']; ?> </td>
		<td> <?php echo $character['contact']; ?> </td>
		<td> <?php echo $character['email']; ?> </td>
		<td> <?php echo $character['address']."<br><br>"; ?> </td>
		</tr>
		<?php
	}
	?>
		</tbody>
	</table>
	<?php
	$characters=$conn->query("select * from test WHERE address REGEXP 'y$';")->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <h1>4.select * from test WHERE address REGEXP 'y$';</h1>
	<table>
		<tbody>
			<tr>
				<th>Name</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Address</th>
			</tr>
	<?php
    foreach ($characters as $character) 
    {
    	?>
	  	<tr>
		<td> <?php echo $character['name']; ?> </td>
		<td> <?php echo $character['contact']; ?> </td>
		<td> <?php echo $character['email']; ?> </td>
		<td> <?php echo $character['address']."<br><br>"; ?> </td>
		</tr>
		<?php
	}
	?>
		</tbody>
	</table>
	<?php
	}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>