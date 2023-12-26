<?php
session_start();
include('conn.php');

$Email = $_POST['Email'];
$Password = $_POST['Password'];
$En_password = sha1($Password);


$sql = "SELECT * FROM  users WHERE U_EMAIL='$Email' AND U_PASSWORD='$En_password' LIMIT 1";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION['U_NAME'] = $row["U_NAME"];
        $_SESSION['U_ID'] = $row["U_ID"];
        $_SESSION['U_EMAIL'] = $row["U_EMAIL"];
        $_SESSION['U_CONTACT'] = $row["U_CONTACT"];
        $_SESSION['U_DOB'] = $row["U_DOB"];
        $_SESSION['U_ADDRESS'] = $row["U_ADDRESS"];
        $_SESSION['U_TYPE'] = $row["U_TYPE"];

        $_SESSION['G_ACCOUNT'] = $row["G_ACCOUNT"];
        $_SESSION['F_ACCOUNT'] = $row["F_ACCOUNT"];
        $_SESSION['I_ACCOUNT'] = $row["I_ACCOUNT"];

        if ($row["U_TYPE"] == 'BUYER') {
            echo "<script>window.location.href = '/iwt/IT21388934/Buyer_Dashboard.php';</script>";
        } else if ($row["U_TYPE"] == 'PUBLISHER') {
            echo "<script>window.location.href = '/iwt/IT21388552/Publisher_Dashboard.php';</script>";
        }
        if ($row["U_TYPE"] == 'ADMIN') {
            echo "<script>window.location.href = '/iwt/IT21386268/Admin_Dashboard.php';</script>";
        }
    }
} else {
    echo "<script>alert('Login Failed! Try Again.');</script>";
    echo "<script>window.location.href = '/iwt/IT21386268/Login.php';</script>";
}
