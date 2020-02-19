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
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	  Name / Email / Contact : <input type="text" name="fname" value="">
	  <input type="submit" name="Name" value="Search By Name">  
	  <input type="submit" name="Email" value="Search By Email">
	  <input type="submit" name="Contact" value="Search By Contact">
	</form>
		<?php
		if(isset($_POST['Name']))
		{
			$fname=$_POST['fname'];
			$prepare=$conn->prepare("select * from personal_detail where firstName = :fname");
			if($prepare->execute(['fname' => $fname]))
			{
				$data=$prepare->fetchAll(PDO::FETCH_ASSOC);
				$data=json_encode($data);
				$characters = json_decode($data);
				?>
				<table>
					<tbody>
						<tr>
							<th>FirstName</th>
							<th>LastName</th>
							<th>Email</th>
							<th>Phone</th>
						</tr>
				<?php
			    foreach ($characters as $character) 
			    {
			    	?>
				  	<tr>
            		<td> <?php echo $character->firstName; ?> </td>
            		<td> <?php echo $character->lastName; ?> </td>
            		<td> <?php echo $character->email; ?> </td>
            		<td> <?php echo $character->phone; ?> </td>
        			</tr><br><br>
        			<?php
				}
				?>
					</tbody>
				</table>
				<?php
			}
		}
		if(isset($_POST['Email']))
		{
			$fname=$_POST['fname'];
			$prepare=$conn->prepare("select * from personal_detail where email = :fname");
			if($prepare->execute(['fname' => $fname]))
			{
				$data=$prepare->fetchAll(PDO::FETCH_ASSOC);
				$data=json_encode($data);
				$characters = json_decode($data);
				?>
				<table>
					<tbody>
						<tr>
							<th>FirstName</th>
							<th>LastName</th>
							<th>Email</th>
							<th>Phone</th>
						</tr>
				<?php
			    foreach ($characters as $character) 
			    {
			    	?>
				  	<tr>
            		<td> <?php echo $character->firstName; ?> </td>
            		<td> <?php echo $character->lastName; ?> </td>
            		<td> <?php echo $character->email; ?> </td>
            		<td> <?php echo $character->phone; ?> </td>
        			</tr><br><br>
        			<?php
				}
				?>
					</tbody>
				</table>
				<?php
			}
		}
		if(isset($_POST['Contact']))
		{
			$fname=$_POST['fname'];
			$prepare=$conn->prepare("select * from personal_detail where phone = :fname");
			if($prepare->execute(['fname' => $fname]))
			{
				$data=$prepare->fetchAll(PDO::FETCH_ASSOC);
				$data=json_encode($data);
				$characters = json_decode($data);
				?>
				<table>
					<tbody>
						<tr>
							<th>FirstName</th>
							<th>LastName</th>
							<th>Email</th>
							<th>Phone</th>
						</tr>
				<?php
			    foreach ($characters as $character) 
			    {
			    	?>
				  	<tr>
            		<td> <?php echo $character->firstName; ?> </td>
            		<td> <?php echo $character->lastName; ?> </td>
            		<td> <?php echo $character->email; ?> </td>
            		<td> <?php echo $character->phone; ?> </td>
        			</tr><br><br>
        			<?php
				}
				?>
					</tbody>
				</table>
				<?php
			}
		}
?>
</body>
</html>