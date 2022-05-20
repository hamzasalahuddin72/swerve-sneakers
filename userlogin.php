<?php
ob_start();
$dbusername = "hs902_hamzasalahuddin";
$dbpassword = "j1Wsm]JYw*nB";

$username = $_POST["username"];
$password = $_POST["password"];

$usernameEmpty = "Please enter a username/@ email";
$usernameLength = "Username\email must be between 8 and 50 characters";
$emailCheck = "Please enter a valid email address";
$emailOk = "Email address is okay";
$passwordEmpty = "Please enter a password";
$pwCondition1 = "Atleast 8 characters";
$pwCondition2 = "One upper case letter";
$pwCondition3 = "One number";
$pwCondition4 = "One special Character:";
$allEmpty = "Please fill the fields";
$accountNotRegistered = 'Account does not exist, <a href="signup.php" id="create-account-top">please create an account</a>';
$invalidPassword = "Invalid password";

$conn = new mysqli('localhost', 'root', '', 'hs902_swerve_login');
//$conn = new mysqli('localhost', $dbusername, $dbpassword, 'hs902_swerve_login');

if($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
} else {
    if(empty($username)) {
        header("Location: login.php?usernameError=$usernameEmpty");
    } else {
        if(empty($password)) {
            header("Location: login.php?username=$username&&passwordError=$passwordEmpty");
        } else {
            $encrypt = password_hash($password, PASSWORD_DEFAULT);
            $query1 = "SELECT * from users WHERE username='$username' OR email='$username'";
            $query2 = "SELECT * from users WHERE password='$password'";
            $result1 = mysqli_query($conn, $query1);
            $result2 = mysqli_query($conn, $query2);
            $count1 = mysqli_num_rows($result1);
            $count2 = mysqli_num_rows($result2);
            if($count1 > 0) {
                if($count2 > 0) {
                    header("Location: index.html?welcome_back");
                } else {
                    header("Location: login.php?username=$username&&error=$invalidPassword");
                }
            } else {
                header("Location: login.php?username=$username&&error=$accountNotRegistered");
            }
        }
    }
}
include("login.php");
?>