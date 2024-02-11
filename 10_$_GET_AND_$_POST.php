<?php

/* $_GET and $_POST get data through URL (e.g., google forms survey)
 * Syntax:
 * $_GET['nameAttributeValue']
 * $_POST['nameAttributeValue'] - heavily used for database
 *
 * $_GET requests
 *  request data from a specified resource
 *  remain the browser history
 *  can be bookmarked
 *  should never be used when dealing with sensitive data (e.g., personal information and passwords)
 *  are only used to request data (not modify)
 *  data is visible to everyone in the URL
 *
 * $_POST requests
 *  send data to a server to create/update a resource
 *  are never cached
 *  do not remain in the browser history
 *  cannot be bookmarked
 *  have no restrictions on data length
 *  data is not displayed in the URL
 */

//echo $_GET['name'] . '<br>'; // Retrieves 'Emerald'
//echo $_GET['age'] . '<br>'; // Retrieves 25
//echo $_GET['email'] . '<br>'; // Retrieves 25

/*
 * isset() check whether a variable is empty
 *  checks whether a variable is set, which means that it has to be declared and is NOT NULL
 */
if (isset($_POST['submit'])) {
    echo $_POST['color'] . '<br>';
    echo $_POST['number'] . '<br>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Relationship between $_SERVER['PHP_SELF'], Query String, and $_GET-->
<!--$_SERVER['PHP_SELF'] - relative path of the currently executing script.-->
<!--    Good for debugging purposes if you want to retrieve a data-->
<!--Query String - part of the URL that follows the ? character.-->
<!--    Allows you to pass data to a script via the URL-->
<!--    Example: https://example.com/myscript.php?param1=value1&param2=value2, the query string contains param1=value1&param2=value2-->
<!--$_GET - retrieves data from the query string.-->
<!--    Allows access the values of the parameters passed via URL-->
<!--<a href="--><?php //echo $_SERVER['PHP_SELF']; ?><!--?-->
<!--name=Emerald&-->
<!--age=25&-->
<!--email=emeraldgreenleaf@tech.com">Click Me</a>-->


<!-- USING $_POST, method can be GET and POST but use POST -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="Favorite Color:" >Color: </label>
        <input type="text" name="color">
    </div>
    <div>
        <label for="Favorite Number: ">Number: </label>
        <input type="number" name="number">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>
