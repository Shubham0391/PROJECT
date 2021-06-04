<?php
session_start();
include "sources/cms/db.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <title>checkout</title>
	<link href="external.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/customStyle.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>

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




            <center><h2>Ordered Products</h2></center><br>
			<?php

			if($_SESSION['order_id'] !=""){
				$total_bil=0;
				$item_name="";
				$item_num="";
				$order_id=$_SESSION['order_id'];
	mysqli_query($mysqli,"delete from cart where product_id='$_GET[product_id]' and order_id='$order_id'");


$query=mysqli_query($mysqli,"select * from products INNER join cart ON cart.product_id=products.product_id where cart.order_id='$order_id' ");
				while($row=mysqli_fetch_array($query)){
				 $total_bil=$total_bil+$row['product_price'] ;
                  $item_name .=$row['product_name'].",";
                  $item_num .=$row['product_id'].",";

				?>

            <div class="single_product text-center">
			<a href="checkout.php?product_id=<?php echo $row['product_id'];?>" style="float:right;">X</a>
              <img src="sources/Images/<?php echo $row['product_img'];?>" alt="image1"/>
              <h3><?php echo $row['product_name'];?></h3>
              <h4>Price:$<?php echo $row['product_price'];?></h4>
			  <p>Qty:<?php echo $row['product_qty'];?> </p>

            </div>
				<?php }?>

				<center><div class="single_product text-center">
				<div style ="text-align:center;font-size:25px">
				<?php echo "Total Bill $".$total_bil;?>

				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

  <input type="hidden" name="business" value="Shivanshtiwari695-facilitator@gmail.com">

  <input type="hidden" name="cmd" value="_xclick">


  <input type="hidden" name="item_name" value="<?php echo $item_name;?>">
  <input type="hidden" name="item_number" value="<?php echo $item_num;?>">
  <input type="hidden" name="amount" value="<?php echo $total_bil;?>">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Enable override of buyers's address stored with PayPal . -->
  <input type="hidden" name="return" value="http://localhost:8015/myproject/success.php">
  <!-- Set variables that override the address stored with PayPal. -->
  <input type="hidden" name="cancel_return" value="http://localhost:8015/myproject/cancel.php"">

  <div align="center" >
  <label>Secure Payment With paypal</label><br/>
  <input type="image" name="submit" border="0"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
	</div>
</form>

				</div>
				</div></center>
				<?php

				}else {?><br><br><br>
			<center>
			<div class="single_product text-center">
			<h2>You have not added any Product</h2>
			</div>

			</center>
			<?php }
			?><br><br>












          <!--Footer is here-->
          <?php include "includes/footer.php"; ?>


  </body>
</html>
