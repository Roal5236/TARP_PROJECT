<?php
	session_start();

	$dbconnect = mysqli_connect("localhost", "root", "", "tarp");
	
	// check to see if user is logging out
	if(isset($_GET['action'])) {
		if($_GET['action']=="logout") {
			unset($_SESSION['user']);
		}
	}
	
	// if login form has been submitted, check if username and password match
	if(isset($_POST['login'])) 
	{
		
		$login_sql="SELECT * FROM login WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";

		if($login_query=mysqli_query($dbconnect, $login_sql)) 
		{
			$login_rs=mysqli_fetch_assoc($login_query);
			$_SESSION['user']=$login_rs['username'];
		}

		
	}
	
	if(isset($_SESSION['user'])) 
	{
		header("location:trendz.php");
	} 

	else 
	{
		include("login.php");
	}
	
?>