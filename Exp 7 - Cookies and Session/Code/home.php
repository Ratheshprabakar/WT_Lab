<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
</head>

<body>

<h1>Welcome 
 <?php 
session_start();

$login_session=$_SESSION['login_user'];
echo $login_session;?></h1>
<a href="logout.php"> Logout </a>
</body>
</html>
