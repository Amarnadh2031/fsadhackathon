<?php

	session_start();

	if(isset($_SESSION['user']))
	{
		session_destroy();

		echo"<script>location.href='admin.php'</script>";

		unset($_SESSION['username']);
		unset($_SESSION['password']);
	}
	else
	{
		echo"<script>location.href='admin.php'</script>";
		
		unset($_SESSION['username']);
		unset($_SESSION['password']);
	}

?>