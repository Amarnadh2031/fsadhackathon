<?php

	$user = "@dmin@ajeet_gupta988";
	$pwd = "itsmadebyh@itomns4173";

	session_start();

	if(isset($SESSION['user']))
	{
		header('location:cpanel.php');
	}

	else
	{
		if($_POST['username']==$user && $_POST['password']==$pwd)
		{
			$_SESSION['user']=$user;

			header('location:cpanel.php');
		}
		else 
		{
			echo"<script>alert('You entered incorrect Username and Password!!')</script>";

			echo"<script>location.href='admin.php'</script>";			
		}
	}

?>