<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">

Name :
<input type="text" name="username"><br><br>

Password :
<input type="password" name="password"><br><br>

Confirm Password :
<input type="password" name="conformpassword"><br><br>

Phone No :
<input type="number" name="phoneno"><br><br>

<input type="submit" value="Save">

</form>

<br>

<a href="display.php">Display Records</a>

</body>
</html>

<?php

include 'database.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['username'];
    $password=$_POST['password'];
    $confirm=$_POST['conformpassword'];
    $phone=$_POST['phoneno'];

    if($password==$confirm)
    {
        $sql="INSERT INTO login(Name,Password,Phone_no)
        VALUES('$name','$password','$phone')";

        if(mysqli_query($conn,$sql))
        {
            echo "Record Inserted Successfully";
        }
    }
    else
    {
        echo "Password and Confirm Password do not match.";
    }
}
?>