<!DOCTYPE HTML>
<html>
	<form action="response.php" method="GET">
		<input type="text" name="login">
		<input type="password" name="password">
		<input type="submit" name="submit">
	</form>
	<?php 
		if (isset($_GET['submit']))
		{
			$login = $_GET['login'];
			$password = $_GET['password'];
			
			if (($login == 'vasya')&&($password == 'pupkin'))
			{
				setcookie('Token',md5($login.$password.'salt'));
				echo 'Helllo';
				// include response.php;
				
			}
			else
				echo 'forbidden';
		}
	
	
	?>
</html>