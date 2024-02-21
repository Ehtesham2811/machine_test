<?php
// Include the database connection
include 'db.php';
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$rollNumber = $_POST['roll_number'];
$password = $_POST['password']; // Get the password from the form

// // here we use hash password  for encrypt our password
// $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO students (name, email, roll_number, password) VALUES (?, ?, ?, ?)");
$stmt->execute([$name, $email, $rollNumber, $password]);

// Redirect to the login page after registration
header('Location: login.php');
exit();
?>
