<?php
ini_set("display_errors", 1);
include "connection1.php";
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
	  <input type="submit" name="Name" value="Show records">
	</form>
		<?php
		if(isset($_POST['Name']))
		{
			$data=$conn->query("select * from employee where DAY(dob)=DAY(CURDATE())");
			if($data)
			{
				$characters=$data->fetchAll(PDO::FETCH_ASSOC);
				// var_dump($characters);
				// $data=json_encode($data);
				// $characters = json_decode($data);
				?>
				<br><br>
				<table>
					<tbody>
						<tr>
							<th>Name</th>
							<th>Contact</th>
							<th>DOB</th>
							<th>Department</th>
						</tr>
				<?php
			    foreach ($characters as $character) 
			    {
			    	?>
				  	<tr>
            		<td> <?php echo $character['name']; ?> </td>
            		<td> <?php echo $character['contact']; ?> </td>
            		<td> <?php echo $character['dob']; ?> </td>
            		<td> <?php echo $character['department']."<br><br>"; ?> </td>
        			</tr>
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