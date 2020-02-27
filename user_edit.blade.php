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
<form action="<?php echo route('user.update',$user->id) ?>" method="post">
	<?php echo csrf_field() ?>
	<?php echo method_field('PATCH') ?>
	Name <input type="text" name="user_name" value="<?php echo $user->name?>" />
	<br>
	Age <input type="text" name="user_age" value="<?php echo $user->age?>"/>
	<br>
	<input type="radio" id="male" name="user_gender" value="male">
  	<label for="male">Male</label>
  	<input type="radio" id="female" name="user_gender" value="female">
  	<label for="female">Female</label>
  	<input type="radio" id="other" name="user_gender" value="other">
  	<label for="other">Other</label>
	<br>
	<label>Education</label>
	<select name="user_education">
	  <option value="B.tech">B.tech</option>
	  <option value="MCA">MCA</option>
	  <option value="Graduate">Graduate</option>
	  <option value="10+2">10+2</option>
	</select>
	<br>
	Department <input type="text" name="user_department" value="<?php echo $user->department?>"/>
	<br>
	<input type="submit" value="save"/>
</form>
</body>
</html>