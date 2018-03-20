<?php

        session_start();
    //destroy session
    if (session_destroy()) {
        header("Location: index.php"); // Redirecting To Home Page
    }
?>