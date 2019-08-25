<html>
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
</style>


<?php
	session_start();
	$con=mysqli_connect('localhost','root','') or die(mysqli_error());  
	mysqli_select_db($con,"library") or die("cannot select DB");
	if(isset($_POST['search']))
	{
		$search = $_POST['search'];
		$query = "select * from book_details where book_title like '$search%' or book_id = '$search'";
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);
		if(mysqli_num_rows($result) ==0)
		{
			echo "<center><h1> book not found<h1> </center>";
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
	while($row = mysqli_fetch_array($result)){
		echo "<tr><td>" . $row['book_id'] . "</td><td>" . $row['book_title'] .  "</td><td>" . $row['category'] .  "</td><td>" . $row['status'] .  "</td></tr>";
	}
	echo "</table>";
					if($_SESSION['category'] == "admin"){
						echo "<center><a href = 'adminpage.php'>Click here to return to Home Page</a></center>";
					}
				else{
						echo "<center><a href = 'userpage.php'>Click here to return to Home Page</a></center>";
					}
	
		}
	}
?>
</html>