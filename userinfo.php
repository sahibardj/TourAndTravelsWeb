<?php
$con= mysqli_connect("localhost","root", "") or die("Unable to connect");

mysqli_select_db($con, 'traveluserdata');

$user= $_POST['user'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$subject= $_POST['subject'];
$comments= $_POST['comments'];
$query= "insert into userinfodata values ('', '$user', '$email', '$phone', '$subject', '$comments')";
mysqli_query($con,$query);
header('location:index.php');

