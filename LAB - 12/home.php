<?php

    session_start();

    echo "welcome -"."".$_SESSION["Username"];

    session_destroy();
    
?>