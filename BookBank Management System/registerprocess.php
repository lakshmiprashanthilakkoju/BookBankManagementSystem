<?php
$Dept = $_POST['dept'];
$Username=$_POST['username'];
$User_id=$_POST['userid'];
$Phno = $_POST['phno'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
$encrypt_pass = SHA1($pwd);
if(!empty($Username) || !empty($User_id) || !empty($pwd) || !empty($cpwd) ||!empty($account_type)){
	$host="localhost";
	$user="root";
	$pass="";
	$db="library";
	$con = new mysqli($host,$user,$pass,$db);
 	if(mysqli_connect_error())
 	{
 		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
 	}
	else{
		if($pwd!=$cpwd)
 		{
 			echo "Pass word Missmatch";
 			die();
 		}
		$res=mysqli_query($con,"INSERT INTO user_details(`user_id`, `user_name`, `dept` , `ph_number` ,`password`) VALUES('".$User_id."','".$Username."','".$Dept."','".$Phno."','".$encrypt_pass."')");
		 $res1=mysqli_query($con,"SELECT * FROM user_details where user_id='".$User_id."' ");
		
		
		if(mysqli_num_rows($res1)==1)
 		{
 			echo "Thank You for Registering";
 			header('Location: homepage.php');
 		}
 		else
 		{
 			echo "Error: ".$res."<br>".$con->error;
 		}
 		$con->close();
 		}
}
else{
	echo "All fields should be filled";
	die();
}

?>
		
