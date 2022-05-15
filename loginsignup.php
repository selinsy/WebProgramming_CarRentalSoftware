<?php

include("connection.php");
if(isset($_POST["continue"])){
    
    $firstname= $_POST["firstname"];
    $lastname=$_POST["lastname"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=password_hash($_POST["password"], PASSWORD_DEFAULT);
    
   
    $insert="INSERT INTO user (firstname, lastname, username, email, password) VALUES ('".$firstname."', '".$lastname."', '".$username."', '".$email."', '".$password."')";
    if($connection-> query($insert)===TRUE){
        
    }
    mysqli_close($connection);
}
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$customer_username=$_POST['username'];
$customer_password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'connection.php';
$connection = Connect();

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT username, password FROM user WHERE customer_username=? AND customer_password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $connection->prepare($query);
$stmt -> bind_param("ss", $customer_username, $customer_password);
$stmt -> execute();
$stmt -> bind_result($customer_username, $customer_password);
$stmt -> store_result();

if ($stmt->fetch())  //fetching the contents of the row
{
    $_SESSION['loginsignup']=$username; // Initializing Session
    header("location: http://localhost/Deneme2/userProfilePage.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>



<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="./src/main.css">
</head>
<body>
    <div class="container">
        <form class="form" id="login">
            <h1 class="form__title">Login</h1>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Username or email" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" required>
                <div class="form__input-error-message"></div>

            </div>
            <button  class="form__button" type="submit" onclick="window.location='http://localhost/Deneme2/userProfilePage.php';">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
        <form action = "loginsignup.php" class="form form--hidden" id="createAccount" method="post">
            <h1 class="form__title">Create Account</h1>
            <div class="form__input-group">
                <input type="text"  class="form__input" autofocus placeholder="First name" name="firstname" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text"  class="form__input" autofocus placeholder="Last name" name="lastname" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username" name="username" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" id="signupEmail" class="form__input"autofocus placeholder="Email Address" name="email" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" name="password" required>
                <div class="form__input-error-message"></div>
            </div>
            
            <button class="form__button" type="submit" name="continue">Continue</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
    <script src="./src/main.js"></script>
</body>