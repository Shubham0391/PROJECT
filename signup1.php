<?php
session_start();
include "sources/cms/db.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
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
				    <td><label>Name    </label></td>
					<td><input type="text" name="name" placeholder="Type Your Name"/></td>
					</tr>
					<tr>
				    <td><label>Email    </label>
					<td><input type="email" name="email" placeholder="Type Your Email"/></td>
					</tr>
					<tr>
				    <td><label>Mobile No.</label>
					<td><input type="tel" name="cell_no" placeholder="Type Your cell_no"/></td>
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

			  $name=$_POST['name'];
			  $email=$_POST['email'];
			  $cell_no=$_POST['cell_no'];
			  $password=$_POST['password'];

			  $user_id =uniqid();

 $query="insert into users(user_id,name,email,cell_no,password) values('$user_id','$name','$email','$cell_no','$password')";
		$run =mysqli_query($mysqli,$query);
		if($run ==true){
			echo "you have created your account successfully Now You can Sign IN";

		  }
		  else{
			  echo "you are unable to register";
		  }
		  }



		  ?>

  </body>
</html>
