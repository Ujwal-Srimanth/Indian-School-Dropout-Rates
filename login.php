<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['name1'];
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
    $sql= "INSERT INTO `signup` (`name`,`email`, `password`) VALUES ('$name','$email', '$password1')";
    
    try {
        $result= mysqli_query($conn,$sql);
      }
      
      catch(Exception $e) {
        echo '<script>alert("User Id Already Exists")</script>';
        
      }

}
}

?>
<!DOCTYPE html>
<html lang="en">
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
    box-sizing: border-box;
}

body {
    font-family: 'Montserrat', sans-serif;
    background: #38417b;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: -20px 0 50px;
		margin-top: 20px;
}

h1 {
    font-weight: bold;
    margin: 0;
}

p {
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: .5px;
    margin: 20px 0 30px;
}

span {
    font-size: 12px;
}

a {
    color: #0e263d;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
}

.container {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, .2), 0 10px 10px rgba(0, 0, 0, .2);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
}

.form-container form {
    background: #fff;
    display: flex;
    flex-direction: column;
    padding:  0 0px;
    height: 100%;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.social-container {
    margin: 10px 0;
}

.social-container a {
    border: 1px solid #313232;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
}

.form-container input {
    background: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 85%;
}

button {
    border-radius: 20px;
    border: 1px solid #5d5c5c;
    background: #5d5c5c;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

button:active {
    transform: scale(.95);
}

button:focus {
    outline: none;
}

button.ghost {
    background: transparent;
    border-color: #fff;
}

.form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all .6s ease-in-out;
}

.sign-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
}

.sign-up-container {
    left: 0;
    width: 50%;
    z-index: 1;
    opacity: 0;
}

.overlay-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform .6s ease-in-out;
    z-index: 100;
}

.overlay {
        background: #ff416c;
    background: linear-gradient(to right, #5d5c5c, #5d5c5c) no-repeat 0 0 / cover;
    color: #fff;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateY(0);
    transition: transform .6s ease-in-out;
}

.overlay-panel {
    position: absolute;
    top: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0 40px;
    height: 100%;
    width: 50%;
    text-align: center;
    transform: translateY(0);
    transition: transform .6s ease-in-out;
}

.overlay-right {
    right: 0;
    transform: translateY(0);
    background-image: url('https://images.pexels.com/photos/11367436/pexels-photo-11367436.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
}

.overlay-left {
    transform: translateY(-20%);
    background-image: url('https://cache.careers360.mobi/media/schools/social-media/media-gallery/27387/2021/9/15/Games.jpg');
}

/* Move signin to right */
.container.right-panel-active .sign-in-container {
    transform: translateY(100%);
}

/* Move overlay to left */
.container.right-panel-active .overlay-container {
    transform: translateX(-100%);
}

/* Bring signup over signin */
.container.right-panel-active .sign-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
}

/* Move overlay back to right */
.container.right-panel-active .overlay {
    transform: translateX(50%);
}

/* Bring back the text to center */
.container.right-panel-active .overlay-left {
    transform: translateY(0);
}

/* Same effect for right */
.container.right-panel-active .overlay-right {
    transform: translateY(20%);
}
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin/Signup Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="login.php" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" target="_blank" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" target="_blank" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Or use your email ID</span>
                <input type="text" name="name1" placeholder="Name" required/>
                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <button type="submit">Log In</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="validate.php" method="post">
                <h1>Sign in</h1>
                <div class="social-container"> 
                    <a href="#" target="_blank" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" target="_blank" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Or use your account</span>
                <input type="email" id ="em" placeholder="Email"  name="email" required/>
                <input type="password" id="pass" placeholder="Password" name="password" required/>
                <a href="#" target="_blank">Forgot your password?</a>
                <button type="submit">Log In</button> 
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome!!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Log In</button>
                    <style>
                        
                        </style>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hey Good To See You !</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Create New Account</button>
                    
                    <style>
                        
                        </style>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () =>
container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () =>
container.classList.remove('right-panel-active'));


function f(){
    
var email = document.getElementById('em').value;  
console.log(email.includes("admin"))
console.log(email)
if(email.includes("admin")){
    
    window.open("home.html")
   

}else{
    window.open("userhome.html")
}
}
</script>
</html>