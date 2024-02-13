<?php

    session_start();
/*
 * session_start()
 * - it is called at the beginning of the script, before
 * any HTML or other output. Why? Because it sets up a session or
 * resumes the current one based on a session identifier passed
 * via a GET or POST request, or passed via a cookie.
 */

    if (isset($_SESSION['username'])) {
        echo '<h1 style="color: deepskyblue">Welcome ' . $_SESSION['username']. '</h1>';
        echo '<a href="logout.php">Log out</a>';
    }
    else {
        echo '<h1>Welcome Guest</h1>';
        echo '<a href="logout.php">Home</a>';
    }
?>