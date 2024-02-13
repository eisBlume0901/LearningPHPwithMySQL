<?php
session_start();
/*
 * SESSION
 *  store information in variables to be used across multiple pages.
 *
 *  Purpose:
 *  preserve certain data across subsequent accesses which enables
 *  developers to build more customized applications and increase the
 *  appeal of website.
 *
 *  Example:
 *  When a user logs in, you can create a session for that user.
 *  During the duration of the session, you can store user-specific
 *  information like user id, username, etc., in session variables
 */

if (isset($_POST['submit']))
{
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if ($username == 'Eisblume' && $password = 'eisBlume0901') {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('Location: /LearningPHPwithMySQL/redirectFolder/dashboard.php');
        /*
         * Purpose of header() function:
         *  sends a raw HTTP header to a client
         *  used to redirect the user to a different location
         * When to use header() function? Real-life scenario examples
         *  1. After a form submission, you might want to redirect the user to a
         *  thank you page
         *  2. After a user logs in, you might want to redirect the user to a
         *  dashboard page
         *  3. After a user logs out, you might want to redirect the user to a
         *  home page
         *  4. If a requested resource cannot be found, you might want to redirect
         *  the user to a 404 page
         */
    }
    else {
        echo 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    <div style="margin-bottom: 1rem">
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div style="margin-bottom: 1rem">
    <input type="submit" value="Submit" name="submit">
</form>
</body>
