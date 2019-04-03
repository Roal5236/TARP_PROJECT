<?php
$insert_sql_usrd = '';
$inser_sql_lgn = '';
$dbconnect = mysqli_connect("localhost", "root", "", "tarp");
echo $_POST['username'];

$login_sql = "SELECT username FROM login WHERE username='" . $_POST['username'] . "'";
$login_query = mysqli_query($dbconnect, $login_sql);
if (mysqli_num_rows($login_query) != 0) {
        header("location:login1.php?login=fail");
} 
    
else {
        echo "BYE";
        $insert_sql = "INSERT INTO `login` (`userID`, `username`, `password`, `FirstName`, `LastName`, `typez`, `Email`) VALUES (
	NULL, 
	'" . mysqli_real_escape_string($dbconnect, $_POST['username']) . "',
	'" . mysqli_real_escape_string($dbconnect, ($_POST['passwordz'])) . "',
	'" . mysqli_real_escape_string($dbconnect, ($_POST['fname'])) . "',
	'" . mysqli_real_escape_string($dbconnect, ($_POST['lname'])) . "',
	'" . mysqli_real_escape_string($dbconnect, ($_POST['typez'])) . "',
	'" . mysqli_real_escape_string($dbconnect, ($_POST['email'])) . "'
    );";
    
        $insert_qry = mysqli_multi_query($dbconnect, $insert_sql);
        header("location:login.php");
    }
 