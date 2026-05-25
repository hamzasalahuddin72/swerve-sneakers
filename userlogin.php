<?php
ob_start();
session_start();

$username = trim($_POST["username"] ?? "");
$password = $_POST["password"] ?? "";

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

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    if (empty($username) && empty($password)) {
        header("Location: login.php?error=" . urlencode($allEmpty));
        exit();
    } else if (empty($username)) {
        header("Location: login.php?usernameError=" . urlencode($usernameEmpty));
        exit();
    } else if (empty($password)) {
        header("Location: login.php?username=" . urlencode($username) . "&&passwordError=" . urlencode($passwordEmpty));
        exit();
    } else {
        $stmt = $conn->prepare("SELECT id, username, email, firstname, password FROM users WHERE username = ? OR email = ? LIMIT 1");
        $stmt->bind_param('ss', $username, $username);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            header("Location: login.php?username=" . urlencode($username) . "&&error=" . urlencode($accountNotRegistered));
            exit();
        }

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['firstname'] = $user['firstname'];

            header("Location: index.php");
            exit();
        } else {
            header("Location: login.php?username=" . urlencode($username) . "&&error=" . urlencode($invalidPassword));
            exit();
        }
    }
}
?>
