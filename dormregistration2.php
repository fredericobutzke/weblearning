<?php
    if('POST' == $_SERVER['REQUEST_METHOD']) {
        if($_POST["name"] == "" or $_POST["gender"] == "" or $_POST["dorm"] == ""){
        	$error = True;
        }
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
	<title>Dorm Registration</title>
</head>

<body bgcolor="#FFFFFF">
	<div align="center">
		<br>
		<h1><?php echo "Register " ?>for Your Dorm </h1><br>
		<?php if($error) : ?>
			<div><font color="red">You must complete the form.</font></div>
		<?php endif ?>
		<br>
		<form action="register4.php" method="POST">
			<table border="1" style="text-align: left;">
				<tr>
					<td>Name: </td>
					<td><input name="name" type="text" /></td>
				</tr>
				<tr>
					<td>Captain:</td> 
					<td><input name="captain" type="checkbox" /></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>
						<input name="gender" value="M" type="radio" />M
						<input name="gender" value="F" type="radio" />F
					</td>
				</tr>
				<tr>
					<td>Dorm: </td>
					<td><select name="dorm" size="1">
						<option value=""></option>
						<option value="Gryffindor">Godric Gryffindor</option>
						<option value="Slytherin">Salazar Slytherin</option>
						<option value="Ravenclaw">Rowena Ravenclaw</option>
						<option value="Hufflepuff">Helga Hufflepuff</option>
					</select></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Register"/>
		</form>
	</div>
</body>

</html>

<!--
div - So webpages have this thing called divisions. When we declare a division we say.. Put a division
a rectangle, in the midle of the code of this page.

table - it is old but we still nowadys use it to layout. 
	We use <tr> for table ROW
	We use <td> for table data or COLUMN
-->