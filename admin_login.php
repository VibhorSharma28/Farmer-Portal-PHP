<?php

		//ob_start();
		$uname="Prashant@iwp.com";
		$pass3="Prashant";
	
		// session_start();
		
		// if(isset($_SESSION['uname']))
		// {
		// 	echo "<h1>Welcome".$_SESSION['uname']."</h1>";

		// 	echo "<a href='options.html#!/Home'>Product</a><br>";

		// 	echo "<br><a href='logout.php'><input type='button' value='Logout' name='logout'></a>";
		// }
		// else
		// {
			if($_POST["uname"]=="Prashant@iwp.com" && $_POST["pass3"]=="Prashant")
			{
				//header('Location:options.html#!/Home');
				//exit;
				// $_SESSION['uname']=$uname;
				echo "<script>alert('hi')</script>";
				echo "<script>location.href='admin_home.html'</script>";
			}
			else
				echo "<script>alert('username or password incorrect')</script>";
		
?>