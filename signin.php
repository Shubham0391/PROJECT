<?php 
session_start(); 
include "sources/cms/db.php"; 
if($_SESSION['user_id'] !="")
	echo "<script>window.location='index.php'</script>";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>SignIn</title>
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
				
			<?php
				if($_SESSION['user_id'] !=true){ ?>
                <li><a href="signup.php">SignUp</a></li>
				<li><a href="signin.php">SignIn</a></li>
				<?php }else{ ?>
				<li><a href="sinout.php">SignOut</a></li>
				<li><a><span style="color:red;">Welcome!</span> <?php echo $userName;?></a></li>
				
				
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
          <div class="signup_form">
		      <form method="post" >
			     <h3>
				   Sign Up
				   </h3>
				   <table>
				   
					<tr>
				    <td><label>Email    </label>
					<td><input type="email" name="email" placeholder="Type Your Email"/></td>
					</tr>
					
					<tr>
				    <td><label>Password  </label>
					<td><input type="password" name="password" placeholder="Type Your Password"/></td>
					</tr>
					<tr>
					 <td><input type="submit" name="submit" value="sign up" /></td>
					 </tr>
					 </table>
					
					
				   
				   
				   
				   </form>
				   



          </div>
          <!--Footer is here-->
          <?php include "includes/footer.php"; ?>
		  <?php
		  
		  
		  if(isset($_POST['submit'])){
			  
			  
			   $email=$_POST['email'];
			  
			   $password=$_POST['password'];
			  
			  $query =mysqli_query($mysqli,"select * from users where email='$email' and password='$password'");
			  $check=mysqli_num_rows($query);
			  
			  if($check>0){
				  while($row=mysqli_fetch_array($query)){
				  $_SESSION['user_id']=$row['user_id'];
					  }
					  echo "<script>window.location='index.php'</script>";
				  
		  }
		  else{
			  echo "you have entered incorrect email or password";
		  }
		  }
			 
		  
		  
		  ?>

  </body>
</html>
<?php
 echo $_SESSION['user_id'];
 ?>
