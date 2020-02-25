<?php
include "connection.php";
?>
<!DOCTYPE HTML>  
<html>
	<head>
		<title>form</title>
		<style>
.error {color: #FF0000;}
.success{color:green;}
form{
	width:80%;
				border:1px solid red;
				text-align: center;
				margin: 0 auto;
				background-color: green;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
	</head>
<body>  
	<?php
		$count=1;
		if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$len= strlen((string)$mobile);
			if (empty($name)) 
			{
			    $nameErr="Name is required";
			    $count=0;
			} 
			else 
			{
			    if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
			    {
			      $nameErr="Only letters and white space allowed";
			      $count=0;
			    }
			}
			if(empty($email)) 
			{
			    $emailErr="Email is required";
			    $count=0;
			} 
			else 
			{
			    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			    {
			      $emailErr="Invalid email format";
			      $count=0;
			    }
			}
			if(empty($mobile)) 
			{
			    $mobileErr="Mobile number is required";
			    $count=0;
			} 
			else
			{
				if($len<10 && $len>10)
				{
					$mobileErr="Invalid number";
					$count=0;
				}
			}
			
			if($count==1)
			{
				$data = ['_id' => new MongoDB\BSON\ObjectID, 'name' => $name, 'email' => $email, 'mobile'=>$mobile];
				$conn->insert($data);
				$manager->executeBulkWrite('bootcamp.mongo', $conn);
				if($manager)
				{
					header("Location: display.php");
				}
				else{
					//echo "can't be inserted";
				}
			}
		}
?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	  Name: <input type="text" name="name" value="">
	  <span class="error">* <?php if(isset($_POST['submit']))
		{echo $nameErr; }?></span>
	  <br><br>
	  Email: <input type="text" name="email" value="">
	  <span class="error">* <?php if(isset($_POST['submit']))
		{ echo $emailErr; }?></span>
	  <br><br>
	  Mobile: <input type="text" name="mobile" value="">
	  <span class="error">* <?php if(isset($_POST['submit']))
		{ echo $mobileErr; }?></span>
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>
	<span class="success">* <?php if(isset($_POST['submit']))
		{ echo $success; }?></span>
</body>
</html>