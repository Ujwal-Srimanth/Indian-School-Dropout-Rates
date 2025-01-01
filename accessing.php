<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email=$_POST['email'];
    $password1=$_POST['password'];
$servername="localhost";
$username="root";
$password="";
$database="project1";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    echo "connection not successfull";
}
else
{
    $db=$conn;
    $tableName="form";
    $columns= ['email','password'];
}
}
?>