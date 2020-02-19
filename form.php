<?php
ini_set("display_errors", 1);
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
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$len= strlen((string)$mobile);
			if (empty($fname)) 
			{
			    $fnameErr="Name is required";
			    $count=0;
			} 
			else 
			{
			    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
			    {
			      $fnameErr="Only letters and white space allowed";
			      $count=0;
			    }
			}
			if (empty($lname)) 
			{
			   $lnameErr="Name is required";
			    $count=0;
			} 
			else 
			{
			    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) 
			    {
			      $lnameErr="Only letters and white space allowed";
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
				if($len<10)
				{
					$mobileErr="Invalid number";
					$count=0;
				}
			}
			
			if($count==1)
			{
				$sql="INSERT INTO personal_detail (firstName, lastName, email, phone) VALUES ('$fname','$lname','$email',$mobile)";
    			$result = $conn->exec($sql);
			    if($result)
			    {
			        $success= 'Thank you for registering with our website.';
			    }
			    else
			    {
			    	echo "value not inserted";
			    }
			}
		}
?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	  First Name: <input type="text" name="fname" value="">
	  <span class="error">* <?php echo $fnameErr;?></span>
	  <br><br>
	  Last Name: <input type="text" name="lname" value="">
	  <span class="error">* <?php echo $lnameErr;?></span>
	  <br><br>
	  E-mail: <input type="text" name="email" value="">
	  <span class="error">* <?php echo $emailErr;?></span>
	  <br><br>
	  Mobile: <input type="text" name="mobile" value="">
	  <span class="error">* <?php echo $mobileErr;?></span>
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>
	<span class="success">* <?php echo $success;?></span>
</body>
</html>