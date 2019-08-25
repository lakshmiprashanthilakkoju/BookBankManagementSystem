<html>
<head>
  <link rel="stylesheet" href="css\login.css">
  <link href="styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Issue book</title>
</head>
<body>
  <div class="main">
    <p class="sign" align="center">ISSUE BOOKS</p>
    <form class="form1" action = "issuephp.php" method = "POST">
      <input class="un " name ="bookid" type="text" align="center" placeholder="Book Id">
      <input class="pass" name ="borid" type="text" align="center" placeholder="Borrower Id">
      <input type="submit" class="submit" name = "signin" align="center" value="Issue">
  </div>
</body>
</html>