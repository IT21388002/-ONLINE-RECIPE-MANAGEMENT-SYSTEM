<?php
session_start();
include('conn.php');

$Name = $_POST['Name'];
$Type = $_POST['Type'];
$Ingredients = $_POST['Ingredients'];
$Make = $_POST['Make'];
$Price = $_POST['Price'];
$U_ID = $_SESSION['U_ID'];
$Category = $_POST['Category'];
$DATE = date('Y-m-d');
$image_Name = $_FILES["fileToUpload"]["name"];

$target_dir = "../assets/img/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$sql = "INSERT INTO recipes  (R_U_ID, R_NAME, R_TYPE,R_PHOTO,R_INGREDIENTS,R_MAKE,R_PRICE,R_DATE,R_CATEGORY)
            VALUES ('$U_ID','$Name','$Type','$image_Name','$Ingredients','$Make','$Price','$DATE','$Category')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Successfully published.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


echo "<script>window.location.href = '/iwt/IT21388552/Publisher_Dashboard.php';</script>";
