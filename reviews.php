<?php

$quality = $_POST["quality"];
$comfortability = $_POST["comfort"];
$aesthetics = $_POST["aesthetics"];
$overall = $_POST["overall"];
$review = $_POST["review"];
$shoeId = $_POST["shoeId"];

$error = "Please complete the review";
$status = "Thank you for your review!";

$conn = new mysqli("localhost", "root", "", "hs902_swerve_login");

if($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
} else {
    if(empty($quality)) {
        header("Location: sneakers-redirect.php?status=$error");
    } else {
        if(empty($comfortability)) {
            header("Location: sneakers-redirect.php?status=$error");
        } else {
            if(empty($overall)) {
                header("Location: sneakers-redirect.php?status=$error");
            } else {
                if(empty($review)) {
                    header("Location: sneakers-redirect.php?status=$error");
                } else {
                    $stmt = $conn->prepare("INSERT INTO reviews(quality, comfortability, aesthetics, overall, review, shoeId) VALUES(?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param('iiiiss', $quality, $comfortability, $aesthetics, $overall, $review, $shoeId);
                    $stmt->execute();
                    header("Location: sneakers-redirect.php?id=$shoeId&status=$status");
                }
            }
        }
    }
}
?>