<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin panel</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<div id="login">
<h2>Prisijungimo forma</h2>
<form action="" method="post">
<label>Vartotojo vardas :</label>
<input id="name" name="username" type="text">
<label>Slaptazodis :</label>
<input id="password" name="password" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>
