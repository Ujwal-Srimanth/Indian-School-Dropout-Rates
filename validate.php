<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    session_start();
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
$sql="select * from signup where email='$email' and password='$password1'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count>0)
{
    echo '<script>alert("login succesful")</script>';
    $que="select name from signup where email='$email' and password='$password1'";
    $res=mysqli_query($conn,$que);
    $tourresult = $res->fetch_array()['name'] ?? '';
    $_SESSION['name1']=$tourresult;
    if(strpos($email,"user"))
    
    {
        header("Location:userhome.php");
    }
    else if(strpos($email,"admin"))
    {
        header("Location:home.php");
    }
    
     

}
else
{
    header("Location:login.php");
}
}

}

?>