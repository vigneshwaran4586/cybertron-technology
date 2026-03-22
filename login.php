<?php
$conn = mysqli_connect("localhost", "root", "", "cybertron");
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM userlist WHERE email = '$email'";
$sql1 = "SELECT *FROM userlist WHERE password = '$password'";
$result = mysqli_query($conn, $sql);
$result1=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result1) == 1) {
        $row = mysqli_fetch_assoc($result1);
        header("Location: cybertronHome.html");
        exit();
    } elseif (mysqli_num_rows($result1)!=1) {
        header("Location: loginerror.html");
        exit();
    }
    }
    elseif (mysqli_num_rows($result)!=1){
    header("Location: loginerror.html");
    exit();
}
mysqli_close($conn);
?>