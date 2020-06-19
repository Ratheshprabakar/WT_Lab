    
<?php
$sname="localhost";
$uname="root";
$passwd="";
$dbname="green_club";
$conn=new mysqli($sname,$uname,$passwd,$dbname);
if($conn->connect_error)
{
 die("Connection failed:".$conn->connect_error);
}
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$college=$_POST['college'];
$regtype=$_POST['regtype'];


 $sql = "INSERT INTO `registration`(`firstname`, `lastname`,`gender`, `email`, `phone`,`college`, `regtype`) VALUES ('$firstname','$lastname','$gender','$email','$phone','$college','$regtype')";
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id; }
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="favicon.jpg" rel="icon">

</head>
<body>

<div class="container">
  <div class="modal show" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration Successful</h4>
        </div>
        <div class="modal-footer">
      </div>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>

    
<?php    
$conn->close();
?>
