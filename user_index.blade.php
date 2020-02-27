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
<table>
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Education</th>
		<th>Department</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
	foreach ($user as $key => $value) {
	?>
	<tr>
		<td><?php echo $value->id; ?></td>
		<td><?php echo $value->name; ?></td>
		<td><?php echo $value->age; ?></td>
		<td><?php echo $value->gender; ?></td>
		<td><?php echo $value->education; ?></td>
		<td><?php echo $value->department; ?></td>
		<td>
			<a href="<?php echo route('user.edit',$value->id); ?>">Edit</a>
		</td>
		<td>
			<form action="<?php echo route('user.destroy', $value->id) ?>" method="post" style="display: inline-block;">
				<?php echo csrf_field() ?>
				<?php echo method_field('DELETE') ?>
				<a href="javascript:;" onclick="confirm_delete(this.parentNode)">Delete</a>
			</form>
		</td>
	</tr>
	<?php
	}
	?>
</table>
<a href="<?php echo route('user.create') ?>" style="border:1px solid red; background-color: green; padding: 10px; color: white;">Create</a>

<script type="text/javascript">
	function confirm_delete(form){
			form.submit();
	}
</script>
</body>
</html>