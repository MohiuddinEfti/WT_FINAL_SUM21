<?php
	include 'controllers/user_control .php';
	
?>
<html>
	<body>
	<form action="" method="POST">
		<table align="center" border="1">
			<tr align="center">
				<td colspan="2">
					Sign Up<br>
					<span><?php echo $error; ?></span>
				</td>	
				
			</tr>
			<tr>
				<td>
					Name:
				</td>
				<td>
					<input type="text" name="name" value="<?php echo $name; ?>" placeholder="Name"> <br>
					<span><?php echo $err_name; ?></span>
				</td>
			</tr>
			<tr>
				<td>
					Username:
				</td>
				<td>
					<input type="text" name="username" value="<?php echo $uname; ?>" placeholder="Username"> <br>
					<span><?php echo $err_uname; ?></span>
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input type="password" name="password" value="<?php echo $pass; ?>" placeholder="Password"> <br>
					<span><?php echo $err_pass; ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="signup" value="Sign Up"><br>
				</td>
			</tr>
			
		</table>
	</form>
	</body>
</html>