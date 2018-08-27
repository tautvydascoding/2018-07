<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Blogi ivesti duomenis";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "root","projektas");
// To protect MySQL injection for Security purpose
function getPrisijungimas () {
    global $connection;
    return $connection;
}
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string(getPrisijungimas(), $username);
$password = mysqli_real_escape_string(getPrisijungimas(), $password);
// Selecting Database
// $db = mysql_select_db("projektas", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query(getPrisijungimas(), "select * from login where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Blogi ivesti duomenis";
}
mysqli_close($connection); // Closing Connection
}
}
?>
