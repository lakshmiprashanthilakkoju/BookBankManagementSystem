<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
<title>Library Management System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +91 9014022844</li>
        <li><i class="fa fa-envelope-o"></i> xyz@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
		<li><?php echo $_SESSION['sess_user']?></li>
      </ul>
    </div>
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="index.html">Library Management System</a></h1>
    </div>

  </header>
</div>
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <ul class="clear">
      <li class="active"><a href = "homepage.php">Home</a></li>
      <li><a class="drop" href="#">books</a>
        <ul>
          <li><a href="addnew.php">Add new title</a></li>
          <li><a href="displaytitles.php">display titles</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">operations</a>
        <ul>
          <li><a href="issue.php">Issue books</a></li>
             <li><a href="#">return books</a></li>
              <li><a href="searchbook.php">search books</a></li>
              <li><a href="#">calculate fine</a></li>
        </ul>
      </li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact us</a></li>
      <li><a href="#">Help</a></li>
      <li><a class = "drop" href = "#"><?php echo $_SESSION['user_name'];?> (admin)</a>
	  <ul>
          <li><a href="#">My profile</a></li>
             <li><a href="logout.php">Logout</a></li>
       </ul>
	</li>
    </ul>
  </nav>
</div>
<div class="wrapper bgded overlay" style="background-image:url('images/demo/homepage/img3.jpg');">
  <article id="pageintro" class="hoc clear"> 
    <h3 class="heading">Online Library Management System</h3>
    <footer><a class="btn" href="how_it_works.docx">How it Works</a></footer>
  </article>
</div>

</body>
</html>