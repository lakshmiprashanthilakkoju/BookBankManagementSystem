<style>
#books{
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#books td, #books th {
  border: 1px solid #ddd;
  padding: 8px;
}

#books tr:nth-child(even){background-color: #f2f2f2;}

#books tr:hover {background-color: #ddd;}

#books th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center; 
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>

<?php
	session_start();
	$con=mysqli_connect('localhost','root','') or die(mysqli_error());  
	mysqli_select_db($con,"library") or die("cannot select DB");
	if(isset($_POST['reserve']))
	{
		$unavailable = "unavailable";
		$search = $_POST['reserve'];
		$query = "select * from book_details where book_title like '$search%' or book_id = '$search'";
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);
		if(mysqli_num_rows($result) ==0)
		{
			echo "<center><h1> book not found<h1> </center>";
		}
		if($row['status'] == "unavailable")
		{
			echo "<center><h1>All copies are borrowed</h1></center>";
			echo "<center><a href = 'userpage.php'>Click here to return to Home Page</a></center>";
			
		}
		else
		{
			echo "<table id = 'books' border ='1'>
			 <tr>
			 <th>Book_id</th>
			 <th>Book_title</th>
			 <th>category</th>
			 <th>status</th>
			 </tr>";
		echo "<tr><td>" . $row['book_id'] . "</td><td>" . $row['book_title'] .  "</td><td>" . $row['category'] .  "</td><td>" . $row['status'] .  "</td></tr>";
		$book_id = $row['book_id'];
		$borrower_id = $_SESSION['sess_user'];
		$query1 = "INSERT INTO `reserve_book`(`book_id`, `reserver_id`) VALUES ('$book_id','$borrower_id')";
		$result1 = mysqli_query($con,$query1);
		$res3 = mysqli_query($con,"UPDATE book_details SET status = '$unavailable'  WHERE book_id = '$book_id'");
		echo "<h1><center>you have reserved this book!</center></h1>";
		echo "<center><a href = 'userpage.php'>Click here to return to Home Page</a></center>";
		}
	}
?>