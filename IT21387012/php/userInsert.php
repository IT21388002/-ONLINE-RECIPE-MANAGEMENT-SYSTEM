<?php
include('conn.php');

$name = $_POST['Name'];
$Email = $_POST['Email'];
$Contact = $_POST['Contact'];
$Password = $_POST['Password'];
$C_Password = $_POST['C_Password'];

if ($Password != $C_Password) {
    echo "<script>alert('Password Does not match. Try Again!');</script>";
} else if (!is_numeric($Contact)) {
    echo "<script>alert('Invalid Contact Number. Try Again!');</script>";
} else {
    $En_password = sha1($Password);

    $sql = "INSERT INTO users  (U_NAME, U_EMAIL, U_CONTACT,U_PASSWORD)
            VALUES ('$name','$Email','$Contact','$En_password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful.');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

echo "<script>window.location.href = '/final/IT21189708/Registration.php';</script>";
