<!DOCTYPE >
<html>
<head>
	<title>Log in page</title>
	<style type="text/css">
		table{
			margin-top: 150px;
			border:1px solid;
			background-color: #eee;
		}
		td{
			border: 0px;
			padding: 10px;
		}
		th{
			border-bottom: 1px solid;
			background-color: #ddd;
		}
	</style>
</head>
<body>
<?php
	session_start();
	if(isset($_SESSION['uid'])){
		header("location:home.php");
		exit;
	}
?>	
<form action="home.php" method="post">
	<table 	align="center">
		<tr>
			<th colspan="2">
				<h2>Login</h2>
			</th>
		</tr>
		<tr>
			<td>
				Username:
			</td>
			<td>
				<input type="text" name="uname">
			</td>
		</tr>
		<tr>
			<td>
				Password:
			</td>
			<td>
				<input type="password" name="pwd">
			</td>
		</tr>
		<tr>
			<td align="right" colspan="2">
				<input type="submit" name="login" value="login">
			</td>
		</tr>

	</table>
</form>
</body>
</html>