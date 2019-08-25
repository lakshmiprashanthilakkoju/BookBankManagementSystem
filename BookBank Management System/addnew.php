<html>
<head>
  <link rel="stylesheet" href="css\register.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Add Title</p>
    <form class="form1" action = "addtitle.php" method = "POST">
      <input class="un " name ="bookid" type="text" align="center" placeholder="Book_id">
	  <input class="un " name ="title" type="text" align="center" placeholder="Title">
	  <input class="un " name ="category" type="text" align="center" placeholder="Category">
      <input type="submit" class="submit" name = "Register" align="center" value="Add Title">
  </div>
</body>
</html>