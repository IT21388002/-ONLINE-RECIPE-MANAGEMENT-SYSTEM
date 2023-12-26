<?php
session_start();
include('conn.php');

$U_ID = $_SESSION['U_ID'];
$sql = "UPDATE  users SET U_TYPE='PUBLISHER' WHERE U_ID=$U_ID";

if ($conn->query($sql) === TRUE) {
    $_SESSION['U_TYPE'] = 'PUBLISHER';
    echo "<script>alert('User Converted as a publisher.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


echo "<script>window.location.href = '/iwt/IT21388552/Publisher_Dashboard.php';</script>";
