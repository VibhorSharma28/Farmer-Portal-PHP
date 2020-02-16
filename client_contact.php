<html>
<head>      
	<title>Prathviraj</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		body
      	{
          font-family: 'Droid Serif', serif;
          font-size: 17px;
          color: #2f2f2f;
          background: url('backabout.jpg');
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
		.img1{
			width: 100%;
			height: 100px;
			position: absolute;
			top: 0;
			left: 0;
		}
		#contact
		{
			margin:auto;
			height: 500px;
			width: 700px;
			border-style: solid;
			border-width: 1px;
			background-color:#E5E5E3;
		}
		#address
		{
			margin-top: 30px;
			margin-left: 20px;
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
            <li><a href="client_home.html" >Home</a></li>
            <li><a href="client_about.html">About Us</a></li>
            <li><a href="client_productlist.php">Products</a></li>
            <li><a href="client_contact.php">Contact Us</a></li>
            <li><a href="index.php">Log Out</a></li>
          </ul>
        </div>
      </div>
            </div>
          </div>
  </div>
    <br><br><br><br>
    <h1 align = "center">Prathviraj Biotech India Limited</h1>
	<br><br>
	
	<div id="contact">

		<div id="address">
			<b>Address</b>: Corporate Office - Sr No-176/5, Shivkrupa Colony<br>
			<span style="margin-left: 57px;">Near Octroi, Hadaspar Pune</span><br>
			<span style="margin-left: 57px;">India</span>
			<br><br>
			<b>Phone Number</b>: 8449961116
			<br><br>
			<b>Email</b>: infoprathvirajbiotech@gmail.com
			<br><br><br>
			<form method="post" action="mail.php">
				<p>For any further queries just type it in the space provided to mail it to us in one go!!
					<br><strong>Email Us:</strong> 
				</p>
				<textarea rows="5" cols="60" name="text"> 
				</textarea><br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>
</body>
</html>