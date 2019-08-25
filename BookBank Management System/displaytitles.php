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
</style>


<?php
	$con=mysqli_connect('localhost','root','') or die(mysqli_error());  
	mysqli_select_db($con,"library") or die("cannot select DB");
	$query = "SELECT * FROM book_details";
	$result = mysqli_query($con,$query);

			echo "<table id = 'books' border ='1'>
			 <tr>
			 <th>Book_id</th>
			 <th>Book_title</th>
			 <th>category</th>
			 <th>status</th>
			 </tr>";

	while($row = mysqli_fetch_array($result)){
		echo "<tr><td>" . $row['book_id'] . "</td><td>" . $row['book_title'] .  "</td><td>" . $row['category'] .  "</td><td>" . $row['status'] .  "</td></tr>";
	}
	echo "</table>";

mysqli_close($con);
?>
</html>