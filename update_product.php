<?php
	if($_POST)
	{
		ob_start();//for turning on output buffering
		$t1 = $_POST["t1"];//obtaining the updated value
		$t2 = $_POST["t2"];//obtaining the updated value
		$t3 = $_POST["t3"];
		$t4 = $_POST["t4"];
		$t5 = $_POST["t5"];
		$ffname = $_POST["ffname"];
		$db = mysqli_connect('localhost','root','','test');
		$sql = " UPDATE product SET des = '$t1', recommendation = '$t2', Dose = '$t3', Available_Packing = '$t4', Crops='$t5'   WHERE pro_name='$ffname' ";
		mysqli_query($db, $sql);
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    	<!-- Latest compiled JavaScript -->
   		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<title>Updation</title>
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
    #content{
    	margin-top:100px;
    	margin-left:200px;
    	font-size:20px;
    	width: 80%;
    }
		</style>
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
		<div id="content">
			<strong>Updated Details of the patient are:<br><br>
			Product name: </strong><?php echo $ffname; ?>
			<br>
			<strong>Description: </strong><?php echo $t1; ?>
			<br>
			<strong>Recommendation: </strong><?php echo $t2; ?>
			<br>
			<strong>Dose: </strong><?php echo $t3; ?>
			<br>
			<strong>Available Packing: </strong><?php echo $t4; ?>
			<br>
			<strong>Crops: </strong><?php echo $t5; ?>
			</form>
		</div>
	</body>
</html>