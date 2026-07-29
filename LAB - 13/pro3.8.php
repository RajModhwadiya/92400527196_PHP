<?php

$cookie_name = "user";

if(isset($_COOKIE[$cookie_name]))
{
    echo "<h2>Welcome Back!</h2>";
    echo "You are a repeated user.";
}
else
{
    setcookie($cookie_name, "visited", time() + 86400*30, "/");
    echo "<h2>Welcome!</h2>";
    echo "You are a new user. Cookie has been created.";
}

?>