<!DOCTYPE html>
<html>
<head>
	<title>Data From Database</title>
   <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet"> 
   <style type="text/css">
      body
      {
          font-family: 'Droid Serif', serif;
          font-size: 17px;
          color: #2f2f2f;
          background: url('backabout.jpg');
      }
      a{
        color: black;
        font-family: 'Varela Round', sans-serif;
        text-decoration: none;
      }
      a:hover{
        text-decoration: ;
        color: #333;

      }
      .prodlist{
        display: block;
        padding: 10px 30px;
        list-style: none;
      }
      .head{
          text-align: center;
          margin-top: 100px;
      }
      .subhead{
          text-align: center;
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

      #display_list
      {
         margin-left: 100px;
         font-size: 110%;
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
   <h1 class="head" align = "center">Prathviraj Biotech India Limited</h1>
   <h3 class="subhead" >Product List</h3>
   
    <div id="display_list">
      <?php
        $conn = new mysqli('localhost','root','','test');
        if($conn -> connect_error)
        {
          die("Connection Failed : ".$conn->connect_error);
        }
        else
        {
            $retval = mysqli_query( $conn, 'SELECT * FROM product' );
            
            if(! $retval ) 
            {
               die('Could not get data: ' . mysqli_error());
            }
            echo "<ul >";
            while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) 
            {
               $data1=$row['pro_name'];
               echo "<li class=\" prodlist\"><a href='admin_product_details.php?data=$data1'>".$row['pro_name']."</a></li>";
               
            }
            echo "</ul>";
              mysqli_close($conn);
         }
      ?>

    </div>
</body>
</html>