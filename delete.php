<?php

$servername="localhost";
$username="root";
$password="";
$database="project1";

$conn=mysqli_connect($servername,$username,$password,$database);
$id=$_GET['id'];
$query="insert deletecounselling select * from counselling where id ='$id'";
$result1=mysqli_query($conn,$query);

$sql="DELETE FROM counselling WHERE id='$id'";
$result=mysqli_query($conn,$sql);
header("Location:studentsdata.php");


?>