<?php
ob_start();

$accountType = trim($_POST["account"] ?? "");
$firstname = trim($_POST["firstname"] ?? "");
$lastname = trim($_POST["lastname"] ?? "");
$username = trim($_POST["username"] ?? "");
$gender = trim($_POST["gender"] ?? "");
$email = trim($_POST["email"] ?? "");
$password = $_POST["password"] ?? "";
$confirmPassword = $_POST["confirmPassword"] ?? "";

$accountTypeEmpty = "Please select an account type";
$firstnameEmpty = "Please enter a first name";
$lastnameEmpty = "Please enter a last name";
$usernameEmpty = "Please enter a username";
$genderEmpty = "Please select your gender";
$emailEmpty = "Please enter a email";
$usernameLength = "Username\email must be between 8 and 50 characters";
$emailCheck = "Please enter a valid email address";
$emailOk = "Email address is okay";
$passwordEmpty = "Please enter a password";
$pwCondition1 = "Atleast 8 characters";
$pwCondition2 = "One upper case letter";
$pwCondition3 = "One number";
$pwCondition4 = "One special Character:";
$allEmpty = "Please fill the fields";
$confirmPasswordEmpty = "Please confirm the password";
$confirmPasswordNo = "Passwords do not match";

$conn = new mysqli('localhost', 'root', '', 'hs902_swerve_login');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    if (empty($accountType)) {
        header("Location: signup.php?firstname=$firstname&&lastname=$lastname&&username=$username&&email=$email&&accountTypeError=$accountTypeEmpty");
    } else if (empty($firstname)) {
        header("Location: signup.php?accountType=$accountType&&firstname=$firstname&&lastname=$lastname&&username=$username&&email=$email&&firstnameError=$firstnameEmpty");
    } else if (empty($lastname)) {
        header("Location: signup.php?accountType=$accountType&&firstname=$firstname&&lastname=$lastname&&username=$username&&email=$email&&lastnameError=$lastnameEmpty");
    } else if (empty($username)) {
        header("Location: signup.php?accountType=$accountType&&firstname=$firstname&&lastname=$lastname&&username=$username&&email=$email&&usernameError=$usernameEmpty");
    } else if (empty($email)) {
        header("Location: signup.php?accountType=$accountType&&firstname=$firstname&&lastname=$lastname&&username=$username&&email=$email&&emailError=$emailEmpty");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?accountType=$accountType&&firstname=$firstname&&lastname=$lastname&&username=$username&&email=$email&&emailError=$emailCheck");
        exit();
    } else if (empty($password)) {
        header("Location: signup.php?accountType=$accountType&&firstname=$firstname&&lastname=$lastname&&username=$username&&email=$email&&passwordError=$passwordEmpty");
        exit();
    } else if (!preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[@$*.&_]/', $password) || strlen($password) < 8) {
        header("Location: signup.php?accountType=$accountType&&firstname=$firstname&&lastname=$lastname&&username=$username&&email=$email&&pwCondition1=$pwCondition1&&pwCondition2=$pwCondition2&&pwCondition3=$pwCondition3&&pwCondition4=$pwCondition4");
        exit();
    } else if (empty($confirmPassword)) {
        header("Location: signup.php?accountType=$accountType&&firstname=$firstname&&lastname=$lastname&&username=$username&&email=$email&&confirmPasswordError=$confirmPasswordEmpty");
        exit();
    } else if ($confirmPassword !== $password) {
        header("Location: signup.php?accountType=$accountType&&firstname=$firstname&&lastname=$lastname&&username=$username&&email=$email&&confirmPasswordError=$confirmPasswordNo");
        exit();
    } else if (empty($gender)) {
        header("Location: signup.php?accountType=$accountType&&firstname=$firstname&&lastname=$lastname&&username=$username&&email=$email&&genderError=$genderEmpty");
        exit();
    } else {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users(account, firstname, lastname, gender, username, email, password) VALUES(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssssss', $accountType, $firstname, $lastname, $gender, $username, $email, $passwordHash);
        $stmt->execute();

        header("Location: index.php?signup=success");
        exit();
    }
}
include("signup.php?");
?>
