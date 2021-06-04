<?php 
session_start();
include "sources/cms/db.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>laptops</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/customStyle.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link href="external.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
  <?php
  $user_id=$_SESSION['user_id'];
  $query =mysqli_query($mysqli,"select name from users where user_id='$user_id'");
   while($row=mysqli_fetch_array($query)){
    $userName=$row['name'];
   }
  ?>
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
                <li class="active"><a href="index.php">Home</a></li>
				
				<?php
				if($_SESSION['user_id'] !=true){ ?>
                <li><a href="signup.php">SignUp</a></li>
				<li><a href="signin.php">SignIn</a></li>
				<?php }else{ ?>
				<li><a href="sinout.php">SignOut</a></li>
				<li><a><span style="color:red;">Welcome!</span> <?php echo $userName;?></a></li>
				
				
				<?php } ?>
                <li><a href="checkout.php">Checkout</a></li>
                
                <li><a href="mobile.php">Mobiles</a></li>
                <li><a href="laptops.php">Laptops</a></li>
                <li><a href="computers.php">Computers</a></li>
                <li><a href="accessories.php">Accessories</a></li>
              </ul>

            </div>
          </div>
          </nav>
          <div class="product_section">
            <h2> Laptops</h2>
            <?php
            $query="select * from products where product_cat='laptop' order by rand() limit 9";
             $run=mysqli_query($mysqli,$query);
             while($row = mysqli_fetch_array($run)){
               ?>
            <div class="single_product text-center">
              <img src="sources/Images/<?php echo $row['product_img']; ?>" alt="image1"/>
              <h4><?php echo $row['product_name']; ?></h4>
              <h4>Product price:$<?php echo $row['product_price']; ?></h4>
              <h4>
               <button> <a href="laptops.php?product_id=<?php echo $row['product_id']; ?>">Add to cart</a></button>
              </h4>
            </div>
          <?php } ?>
            </div>
          <!--Footer is here-->
          <?php include "includes/footer.php"; ?>

  </body>
</html>
<?php

if($_GET['product_id']!=""){
	
	 $pro_id = $_GET['product_id'];
	
	if(empty($_SESSION['order_id'])){
	$_SESSION['order_id']=uniqid();
		
}
  $order_id= $_SESSION['order_id'];
  
  $check_result=mysqli_query($mysqli,"select * from cart where order_id='$order_id', and product_id='$pro_id'");
   $run=mysqli_num_rows($check_result);
  if($run>0){
	  
	  $query =mysqli_query($mysqli,"update cart set product_qty=product_qty+1where order_id='$order_id'");
	  if($query){
		  echo"<script>alert('cart has been updated')</script>";
	  }
  }
  
  
  else{
  $query =mysqli_query($mysqli,"insert into cart(order_id,product_id,product_qty) values('$order_id','$pro_id',1)");
  if($query == true){
	  echo"<script>alert('product has been added')</script>";
  
}
}
}
?>

