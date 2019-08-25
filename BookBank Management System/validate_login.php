<?php
	ob_start();
   	if(!empty($_POST['user']) && !empty($_POST['pass'])) 
	{  
		$user=$_POST['user'];  
		$pass=$_POST['pass'];
		$con=mysqli_connect('localhost','root','') or die(mysqli_error());  
		mysqli_select_db($con,"library") or die("cannot select DB");  
		$encrypt_pass = SHA1($pass);
		$query = "SELECT * FROM user_details WHERE user_id= '".$user."' AND password='".$encrypt_pass."'";
		$result = mysqli_query($con,$query);
		$numrows = mysqli_num_rows($result);  
		$row = mysqli_fetch_assoc($result);
		if($numrows!=0)  
		{
			$dbusername=($row['user_id']);  
			$dbpassword=($row['password']);    
			if($user == $dbusername && $encrypt_pass == $dbpassword)  
			{
				$query1 = "SELECT user_name FROM user_details WHERE user_id= '".$user."'";
				$result1 = mysqli_query($con,$query1);
				$row1 = mysqli_fetch_assoc($result1);
				$query2 = "SELECT category FROM user_details WHERE user_id= '".$user."'";
				$result2 = mysqli_query($con,$query2);
				$row2 = mysqli_fetch_assoc($result2);
				session_start();
				$_SESSION['user_name'] = ($row1['user_name']);
				$_SESSION['sess_user']=$user;
				$_SESSION['flag'] = 1;
				$_SESSION["category"] = ($row2['category']);
				if($row2['category'] == "admin"){
					header("Location: adminpage.php");
				}
				else{
					header("Location: userpage.php");
				}
				die();
			}
		}
		else 
		{  
			echo "Invalid username or password!";  
		}
	}
?>