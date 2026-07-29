<?php
include 'database.php';

$id = $_GET['id'];

$sql = "DELETE FROM login WHERE id='$id'";

if(mysqli_query($conn,$sql))
{
    header("Location: display.php");
}
else
{
    echo "Delete Failed";
}
?>