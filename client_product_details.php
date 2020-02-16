<html>
<head>
   <meta charset="utf-8">
   <title>Data From Database</title>
   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <style type="text/css">
      body{
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
      #display_area
      {
        width: 60%;
        float: left;
        margin-left: 50px;
        font-size: 120%;
      }
      #product_img
      {
        float: left;
        margin-left: 100px;
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
    
    <br><br><br><br><br><br>  
    <?php
      $conn = new mysqli('localhost','root','','test');
      if($conn -> connect_error)
      { 
        die("Connection Failed : ".$conn->connect_error);
      }
      $data = $_GET['data'];
      $sql = "SELECT * FROM product WHERE pro_name='$data'";
      $result = $conn->query($sql) or die($conn->error);
      $row=mysqli_fetch_assoc($result);
    ?>
    <h1 align="center"><?php echo "{$row['pro_name']}" ?></h1><br><br>
    <div id="display_area">
      <?php
          echo "<strong>Description:</strong> {$row['des']} <br><br> ".
          "<strong>Recommendation:</strong> {$row['recommendation']} <br><br> ".
          "<strong>Dose:</strong> {$row['Dose']} <br><br> ".
          "<strong>Available Packing:</strong> {$row['Available_Packing']} <br><br> ".
          "<strong>Crops:</strong> {$row['Crops']} <br><br> ";
          //"img : ".'<img src="$t" width="200px">'. "<br>";
          $t = $row['img'];
          //mysqli_close($conn);
      ?>
    </div>
      <div id="product_img">
        <img src="<?php echo $t; ?>" width="350px" height="400px">
     </div>
</body>
</html>