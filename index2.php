<?php
session_start(); 
include "sources/cms/db.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <title>My store </title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/customStyle.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link href="external.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
  
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
            <div class="navbar-header">
              <h3>mystore</h3>
              <button class="navbar-toggle" data-target="#mainNavbar" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse" id="mainNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index2.php">Home</a></li>
                
				
				
                <li><a href="signup1.php">SignUp</a></li>
				<li><a href="sigin1.php">SignIn</a></li>
				<li><a href="sigin1.php">Mobiles</a></li>
				<li><a href="sigin1.php">Laptops</a></li>
				<li><a href="sigin1.php">Computers</a></li>
				
				
				
				
              </ul>

            </div>
          </div>
          </nav>
          <div class="product_section">
            <h2> Featured Products</h2>
            <?php
            $query="select * from products order by rand() limit 12";
             $run=mysqli_query($mysqli,$query);
             while($row = mysqli_fetch_array($run)){
               ?>
            <div class="single_product text-center">
              <img src="sources/Images/<?php echo $row['product_img']; ?>" alt="image1"/>
              <h4><?php echo $row['product_name']; ?></h4>
              <h4>Product price:$<?php echo $row['product_price']; ?></h4>
              <h4>
               <button> <a href="sigin1.php">Add to cart</a></button>
              </h4>
            </div>
			
          <?php } ?>
            </div>
			<div>
			<center> <h1>
				   First you need to sign in for More Products
				   </h1></center>
				   </div>
          <!--Footer is here-->
          <?php include "includes/footer.php"; ?>

  </body>
</html>

