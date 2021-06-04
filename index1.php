
<!DOCTYPE html>
<html>
  <head>
    <title>mystore</title>
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
              <h3>Company Logo</h3>
              <button class="navbar-toggle" data-target="#mainNavbar" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse" id="mainNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                
				<li><a><span style="color:red;">Welcome!</span> <?php echo $userName;?></a></li>
				<?php
				if($_SESSION['user_id'] !=""){ ?>
                <li><a href="signup.php">SignUp</a></li>
				<li><a href="signin.php">SignIn</a></li>
				<?php }else{ ?>
				<li><a href="sinout.php">SignOut</a></li>
				
				
				<?php } ?>
				<li><a href="#">Checkout</a></li>
                <li><a href="mobile.php">Mobiles</a></li>
                <li><a href="laptops.php">Laptops</a></li>
                <li><a href="computers.php">Computers</a></li>
                <li><a href="accessories.php">Accessories</a></li>
              </ul>

            </div>
          </div>
          </nav>
          <div class="product_section">
            <h2> Featured Products</h2>
            <?php
            $query="select * from products order by rand() limit 9";
             $run=mysqli_query($mysqli,$query);
             while($row = mysqli_fetch_array($run)){
               ?>
            <div class="single_product text-center">
              <img src="sources/Images/<?php echo $row['product_img']; ?>" alt="image1"/>
              <h4><?php echo $row['product_name']; ?></h4>
              <h4>Product price:Rs.<?php echo $row['product_price']; ?></h4>
              <h4>
                <button>Add to cart</button>
              </h4>
            </div>
          <?php } ?>
            </div>
          <!--Footer is here-->
          <?php include "includes/footer.php"; ?>

  </body>
</html>

