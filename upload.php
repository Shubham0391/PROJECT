<html>
<head>
<title>Upload image</title>
</head>
<body>
  <center>
  <h1>Upload an image into database using php</h1>
  <form action="sign.php"method="POST" enctype="multipart/form-data">
  
  <label>Choose Profile Pic:</label><br>
  <input type="file" name="myfile" id="image"/><br>
  
  
  <label>Enter username:</label><br>
  <input type="text" name="username" placeholder="Enter username"/><br>
  <label>Enter designation:</label><br>
  <input type="text" name="designation" placeholder="Enter designation" /><br>
  
  
  <input type="submit" name="upload" value="upload image"/><br>
  </form>
  </center>
  </body>
  </html>
 