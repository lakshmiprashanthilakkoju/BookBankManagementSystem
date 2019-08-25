<?php
	$con=mysqli_connect('localhost','root','') or die(mysqli_error());  
	mysqli_select_db($con,"library") or die("cannot select DB");
	if(isset($_POST['bookid']) && isset($_POST['title']) && isset($_POST['category']))
	{
		$book_id = $_POST['bookid'];
		$title = $_POST['title'];
		$cat = $_POST['category'];
		$status = "available";
		$query = "INSERT INTO `book_details`(`book_id`, `book_title`, `category`, `status`) VALUES ('$book_id','$title','$cat','$status')";
		$result = mysqli_query($con,$query);
		echo "<h1><center>Succesfully added</h1></center>";
		echo "<center><a href = 'userpage.php'>Click here to return to Home Page</a></center>";
	}
	?>