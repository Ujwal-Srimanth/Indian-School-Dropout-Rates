<?php
$servername="localhost";
$username="root";
$password="";
$database="project1";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    echo "connection not successfull";
}
else{echo "connection successfull";}


?>