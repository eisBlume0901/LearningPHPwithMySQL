<?php

// Super globals - built in variables that are always available in all scopes.
// They are all associative-arrays which stores information retrieved from HTTP

// $_SERVER - holds information about headers, paths, and script locations
//var_dump($_SERVER); // Sample of information are HTTP_HOST, SERVER_PORT
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>.
<body>
<ul> <!-- Recall retrieving values using keys-->
    <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li> <!--localhost:63342-->
    <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li> <!--C:\xampp\htdocs\LearningPHPwithMySQL-->
    <li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li> <!--C:\Windows-->
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li> <!--PhpStorm 2023.3.3-->
    <li>Server Post: <?php echo $_SERVER['SERVER_PORT']?></li> <!--63342-->
    <li>Current File Direction: <?php echo $_SERVER['PHP_SELF']?></li> <!--LearningPHPwithMySQL/09_$_SERVER.php-->
    <li>Request URI: <?php echo $_SERVER['REQUEST_URI']?></li> <!--/LearningPHPwithMySQL/09_$_SERVER.php?_ijt=16ku5m2lvlgd7llb9ejqjtlpm5&_ij_reload=RELOAD_ON_SAVE-->
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li> <!--Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36 Edg/121.0.0.0-->
    <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li> <!--127.0.0.1-->
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li> <!--53006-->
</ul>
</body>
</html>