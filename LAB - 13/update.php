<?php
include 'database.php';

$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$sql = "UPDATE login
SET
Name='$name',
Password='$password',
Phone_no='$phone'
WHERE id='$id'";

if(mysqli_query($conn,$sql))
{
    header("Location: display.php");
}
else
{
    echo "Update Failed";
}
?>