<?php
	$con=mysqli_connect('localhost','root','') or die(mysqli_error());  
	mysqli_select_db($con,"library") or die("cannot select DB");
	if(isset($_POST['bookid']) and isset($_POST['borid']))
	{
		$unavailable = "unavailable";
		$book_id = $_POST['bookid'];
		$user_id = $_POST['borid'];
		$res = mysqli_query($con, "select * from book_details where book_id = '$book_id'");
		$row = mysqli_fetch_assoc($res);
		if($row['status'] == "available")
			echo "<center><h1>All copies are borrowed</h1></center>";
		else{
		if(mysqli_num_rows($res) == 1)
		{
			$res1 = mysqli_query($con, "select * from user_details where user_id = '$user_id'");
			if(mysqli_num_rows($res1) == 1)
			{
			$from_date = date('Y-m-d H:i:s');
			$to_date = date('Y-m-d H:i:s', strtotime("+15 days"));
			$res3 = mysqli_query($con,"UPDATE book_details SET status = '$unavailable' WHERE book_id = '$book_id'");
			$res4 = mysqli_query($con,"INSERT INTO borrower_details (`borrower_id`, `book_id`, `from_date`, `to_date`, `return_date`) VALUES ('$user_id','$book_id','$from_date','$to_date','$to_date')");
			echo "<center><h1>Sucessfully Issued!</h1></center>";
			}
		}
		}
	}
?>