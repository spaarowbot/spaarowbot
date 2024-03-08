<?php
include '../data/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM User WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            header("Location: ../pages/account.php");
            exit();
        } else {
            header("Location: ../pages/login.php?error=incorrect");
            exit();
        }
    } else {
        header("Location: ../pages/login.php?error=user_not_found");
        exit();
    }
}
?>