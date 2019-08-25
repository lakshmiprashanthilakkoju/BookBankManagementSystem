<html>
<head>
  <link rel="stylesheet" href="css\login.css">
  <link href="styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign in</title>
</head>
<body>
  <div class="main">
    <p class="sign" align="center">Log in</p>
    <form class="form1" action = "validate_login.php" method = "POST">
      <input class="un " name ="user" type="text" align="center" placeholder="User id">
      <input class="pass" name ="pass" type="password" align="center" placeholder="Password">
      <input type="submit" class="submit" name = "signin" align="center" value="Log In">
      <p class="forgot" align="center"><a href="register.php">New User?</p>
  </div>
</body>
</html>