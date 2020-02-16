<?php
	if($_POST)
	{
		ob_start();//for turning on output buffering
		$pname = $_POST["pname"];
		$db = mysqli_connect('localhost','root','','test');
		$sql = "SELECT * FROM product WHERE pro_name='$pname'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_assoc($result);
	}
?>	
<html>
	<head>
		<meta charset="utf-8">
		<title>Updation</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    	<!-- Latest compiled JavaScript -->
   		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<style type="text/css">
		body{
		    font-family: 'Droid Serif', serif;
		    font-size: 14px;
		    color: #2f2f2f;
		    background-color: #f9f7f1;
		}
		.head{
		    text-align: center;
		}
		.subhead{
		    text-transform: uppercase;
		    display: flex;
		    border: 1px solid;
		    background-color: #ACDF87;
		    justify-content: space-around;
		    align-items: center;
		    position: absolute;
		    top: 93px;
		    width: 100%;
		    left: 0;
		    height:60px;
		}
		 a{
			/*background: #c9df8a;*/
			text-decoration: none;
		}
		a:link {
  			color: green;
  			text-decoration: none;
		}
		a:visited {
		  color: green;
		}
		a:active {
		  color: yellow;
		} 
		a:hover
		{	
			font-size: 130%;
			/*color: #E69A8DFF;
			background: #5F4B8BFF;*/
		}
		.navbar-inverse{
      border: none;
      background: black;
    }
    .nav{
      height: 60px;
      border: none;
    }
    .navbar-nav{
      padding-right: 50px;
    }
    .navbar-inverse .navbar-nav>li>a{
      color: white;
      padding-top: 20px;
      font-size: 18px;
      font-weight: bolder;
      font-family: 'McLaren', cursive;
    }
    #mm{
    	margin-top:100px;
    	margin-left:200px;
    	font-size:20px;
		</style>
    }
	</head>
	<body>
		<div>
    <div class="row">
            <div class="col-lg-12">
      <div class="navbar navbar-inverse navbar-fixed-top"   id="t1">
        <div class="navbar-header">
          <div class="navbar-brand">
            <img src="prathviraj1.jpg" style="height: 50px; width:auto; margin-left: 50px; margin-top: -10px;">
          </div>
        </div>
        <div class="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="admin_home.html" >Home</a></li>
            <li><a href="admin_about.html">About Us</a></li>
            <li><a href="admin_productlist.php">Products</a></li>
            <li><a href="admin_contact.php">Contact Us</a></li>
            <li><a href="index.php">Log Out</a></li>
          </ul>
        </div>
      </div>
            </div>
          </div>
  </div>
  <div id="mm">
		<b>Product Name:</b> <?php echo $pname; ?>
		<br>
		<b>Update the products:</b>
		<br><br>
		<form method="post" action="update_product.php">	
			<strong>Description: </strong> <textarea name="t1" rows="6" cols="50"><?php echo $row['des'] ?></textarea>
			<br><br>
			<strong>Recommendation: </strong> <input type="text" value="<?php echo $row['recommendation'] ?>" name="t2" required><br><br>
			<strong>Dose: </strong> <input type="text" value="<?php echo $row['Dose'] ?>" name="t3" required><br><br>
			<strong>Available Packing: </strong> <input type="text" value="<?php echo $row['Available_Packing'] ?>" name="t4" required><br><br>
			<strong>Crops: </strong> <input type="text" value="<?php echo $row['Crops'] ?>" name="t5" required><br><br>
			<input type="hidden" name="ffname" value="<?php echo $pname; ?>">
			<input type="submit" class="btn btn-primary" style="margin-left: 80px" value="Make Changes">
		</form>
	</div>
	</body>
</html>