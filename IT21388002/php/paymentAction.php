<?php
session_start();
include('conn.php');

$R_ID = $_GET['id'];
$U_ID =   $_SESSION['U_ID'];
$date = date('Y-m-d');
$time = date("h:i:sa");

$sql1 = "SELECT * FROM recipes WHERE R_ID = $R_ID  LIMIT 1";
$result = $conn->query($sql1);
while ($row = $result->fetch_assoc()) {
    $R_PRICE = $row['R_PRICE'];
}

$sql = "INSERT INTO downloads  (D_USER, D_R_ID, D_PRICE,D_DATE,D_TIME)
            VALUES ('$U_ID','$R_ID','$R_PRICE','$date','$time')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Payment Successful.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($_SESSION['U_TYPE'] == 'PUBLISHER') {
    echo "<script>window.location.href = '/iwt/IT21388002/Publish_Recipe.php';</script>";
} else if ($_SESSION['U_TYPE'] == 'BUYER') {
    echo "<script>window.location.href = '/iwt/IT21388934/Buyer_Dashboard.php';</script>";
} else if ($_SESSION['U_TYPE'] == 'ADMIN') {
    echo "<script>window.location.href = '/iwt/IT21386268/Admin_Dashboard.php';</script>";
}
