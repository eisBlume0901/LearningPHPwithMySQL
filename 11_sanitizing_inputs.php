<?php

if (isset($_POST['submit'])) {
    // Version 1
    // storing in a variable and using htmlspecialchars()
    /*
     * htmlspecialchars()
     *  use everytime you output content within HTML
     *  ensures that the content is interpreted as text, not HTML
     *  it helps prevent security vulnerabilities such as cross-site scripting (XSS) attacks
     *  When echoing user input or dynamic data into HTML elements (such as text, attributes,
     *      or URLS) always apply this to avoid unintended HTML interpretation
     *
     * Summary: Use it to safely render HTML content and protect against security risks when
     * displaying user-generated data on webpages
     *
     * In relation to database:
     *  1. Do not use it, instead store the actual data in the database not its HTML representation
     *  2. If you need to store HTML characters (e.g., <, >, &) as part of user input (such as BBCode)
     *      apply it before storing the data
     *  3. When retrieving data from the database, use it only during output to ensure safe rendering in
     *      HTML
     */
    // After retrieving the data, store it in a variable rather than echoing it
    // Purpose: So that it can be reused in other HTML sections of your website
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    echo $name . '<br>'; // Expect there will be an output
    echo $age . '<br>';
    echo $email . '<br>';
    echo $password . '<br>';

    // Version 2
    // using filter_input() function
    /*
     * filter_input(INPUT_POST, $_POST['nameAttributeValue'], FILTER_ENUM)
     *  used to retrieve specific external variables (e.g., form submissions, query strings, cookies,
     *      or server environment by name)
     *  allows validation and sanitization of variables before using them in the application
     *  by validating input data, you can prevent potential security threats such as SQL injection and
     *      ensure data integrity
     *  by filtering and sanitizing user input, you ensure that your applications only accepts valid
     *  data and avoids potential security breaches
     *  helps protect against malicious input and ensures data handling.
     *
     *  In relation to database:
     *  Filtering and sanitation ensures teh user input are valid and sanitized before storing them in database
     *  Prevents the risk of SQL injection
     */
    $name1 = filter_input(INPUT_POST, $_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $age1 = filter_input(INPUT_POST, $_POST['age'], FILTER_SANITIZE_NUMBER_INT);
    $email1 = filter_input(INPUT_POST, $_POST['age'], FILTER_SANITIZE_EMAIL);
    $password1 = filter_input(INPUT_POST, $_POST['age'], FILTER_VALIDATE_REGEXP);

    echo $name1 . '<br>'; // It is a hidden
    echo $age1 . '<br>'; // It is hidden
    echo $email1 . '<br>'; // It is hidden
    echo $password1 . '<br>'; // It is hidden

    // Version 3
    // filter_var() vs filter_input() - generalized version of filter_input can be used for any variables
    //  since it can be used in any variables (not also limited to superglobals)
    $name2 = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);



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

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="number" name="age">
    </div>
    <div>
        <label for="email">Email: </label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>