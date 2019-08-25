<html>
<head>
  <link rel="stylesheet" href="css\register.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Registration Form</p>
    <form class="form1" action = "registerprocess.php" method = "POST">
      <input class="un " name ="userid" type="text" align="center" placeholder="Registration Number">
	  <input class="un " name ="username" type="text" align="center" placeholder="User name">
	  <input class="un " name ="dept" type="text" align="center" placeholder="Department">
	  <input class="un " name ="phno" type="text" align="center" placeholder="Phone Number">
      <input class="pass" name ="pwd" type="password" align="center" placeholder="Password">
	  <input class="pass" name ="cpwd" type="password" align="center" placeholder="Confirm Password">
      <input type="submit" class="submit" name = "Register" align="center" value="Register">
  </div>
</body>
</html>