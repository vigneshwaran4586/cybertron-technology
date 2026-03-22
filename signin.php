<?php
$conn = mysqli_connect("localhost", "root", "", "cybertron");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO userlist (email, password)
        VALUES ('$email', '$password')";
if (mysqli_query($conn, $sql)) {
    header("Location: login.html");
} else {
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
