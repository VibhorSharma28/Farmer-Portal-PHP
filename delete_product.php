<?php
	if($_POST)
	{
		ob_start();//for turning on output buffering
		$dpname = $_POST["dpname"];
		$db = mysqli_connect('localhost','root','','test');
		$sql = "DELETE FROM product WHERE pro_name='$dpname'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_assoc($result);
		$msg = "$dpname is deleted";
		echo "<script>alert('$msg')</script>";
		echo "<script>location.href='admin_productlist.php'</script>";
	}
?>	