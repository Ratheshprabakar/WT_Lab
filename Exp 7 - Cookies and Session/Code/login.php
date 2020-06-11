<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>

<table >
<tr>
<form name="" method="post">
<td>
<table >
<tr>
<td ><strong>User Login </strong></td>
</tr>
<tr>
<td >Username</td>
<td >:</td>
<td ><input name="username" type="text" id="username"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Login">
<input type="reset" name="reset" value="reset"></td>
</form>
</tr>
</table>
</td>

</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	  
include("config.php");

session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$_SESSION['login_user']=$username;
 
$query = mysql_query("SELECT username FROM login_details WHERE username='$username' and password='$password'");

 if (mysql_num_rows($query) != 0)
{

 echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";	
  }

  else
  {
echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
}

}
    
?>
						
			</article>								
	</main>
      </div>
    </div>
   
  </div>
</body>
</html>
