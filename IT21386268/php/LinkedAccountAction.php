<?php
session_start();
include('conn.php');

$G_ACCOUNT = $_POST['G_ACCOUNT'];
$F_ACCOUNT = $_POST['F_ACCOUNT'];
$I_ACCOUNT = $_POST['I_ACCOUNT'];
$U_ID = $_SESSION['U_ID'];


$sql = "UPDATE  users SET G_ACCOUNT='$G_ACCOUNT',F_ACCOUNT='$F_ACCOUNT',I_ACCOUNT='$I_ACCOUNT' WHERE U_ID=$U_ID";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Successfuly Saved.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


echo "<script>window.location.href = '/iwt/IT21386268/login.php';</script>";
