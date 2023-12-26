<?php
session_start();
include('conn.php');

$id = $_GET['id'];



$sql = "DELETE FROM recipes WHERE R_ID=$id";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Removed.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


echo "<script>window.location.href = '/iwt/IT21388552/Publisher_Dashboard.php';</script>";
