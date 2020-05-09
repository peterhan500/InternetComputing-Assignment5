<!DOCTYPE html>
<html>
<head>
	<h1>Customers Information</h1>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
			color: #d96459;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
	</style>
</head>
<body>
<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>car</th>
		<th>favoriteFood</th>
		<th>favoriteMovie</th>
		<th>favoriteVideoGame</th>
	</tr>
	
	<?php
	$conn=mysql_connect("Local instance 3306", "root", "12345");

	mysql_select_db("customers");
	mysql_query("set names 'gbk'");

	$sql="SELECT * FROM customers";
	$rs=mysql_query($sql);
	?>

	<table width="400" border="1" style="text-align:center">
		<tr><th>id</th><th>name</th><th>email</th><th>car</th><th>favoriteFood</th><th>favoriteMovie</th><th>favoriteVideoGame</th></tr>

	<?php
		while($row = mysql_fetch_assoc($rs)){
	?>
		<tr><td><?php echo $row['id'];?></td><td><?php echo $row['name'];?></td><td><?php echo $row['email'];?></td><td><?php echo $row['car'];?></td><td><?php echo $row['favoriteFood'];?></td><td><?php echo $row['favoriteMovie'];?></td><td><?php echo $row['favoriteVideoGame'];?></td></tr>
		<?php
		}
	?>
</table>
</body>
</html>