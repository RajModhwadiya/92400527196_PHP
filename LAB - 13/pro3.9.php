<?php
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Store username and password in cookies for 30 days
    setcookie("username", $username, time() + (86400*30), "/");
    setcookie("password", $password, time() + (86400*30), "/");

    echo "Login Successful!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remember Me Using Cookies</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username"
    value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">
    <br><br>

    Password:
    <input type="password" name="password"
    value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>">
    <br><br>

    <input type="submit" name="login" value="Login">
</form>

</body>
</html>