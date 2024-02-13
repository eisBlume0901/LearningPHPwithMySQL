<?php

if (isset($_POST['submit'])) {
    if (!empty($_FILES['upload']['name'])) {
        // Assuring that the file uploaded are images
        $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');

        print_r($_FILES);
        /*
         * Sample output:
         * Array ( [upload] =>
         * Array ( [name] => Starry Night (1889).jpg
         *          [full_path] => Starry Night (1889).jpg
         *          [type] => image/jpeg
         *          [tmp_name] => C:\xampp\tmp\php558E.tmp
         *          [error] => 0
         *          [size] => 434357 ) )
         */

        $file_name = $_FILES['upload']['name'];
        $file_type = $_FILES['upload']['type'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        $file_error = $_FILES['upload']['error'];
        $file_target_dir = "uploads/{$file_name}";

//        // Version 1 using explode() and strtolower() functions
//        $file_extension = explode('.', $file_name); // explode() is a function that breaks a string into an array
//        // counterpart in Java is split() method
//        $file_extension = strtolower(end($file_extension)); // end() function returns the last element of an array


        // Version 2 using pathinfo() function
        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION); // PATHINFO_EXTENSION is a constant that returns the file extension

        // Validate file extension
        if (in_array($file_extension, $allowed_extensions)) {
            if ($file_error === 0) {
                if ($file_size <= 1000000) { // 1MB = 1000000 bytes
                    if (move_uploaded_file($file_tmp_name, $file_target_dir))
                    /*
                     * move_uploaded_file function moves an uploaded file to a new location
                     */
                    {
                        $message = '<p style="color: green;">File uploaded successfully</p>';
                    }
                    else {
                        $message = '<p style="color: red;">File not uploaded</p>';
                    }
                }
                else {
                    $message = '<p style="color: red;">File size is too large</p>';
                }
            }
            else {
                $message = '<p style="color: red;">Error uploading file</p>';
            }
        }
        else {
            $message = '<p style="color: red;">Invalid file extension</p>';
        }

    }
    else {
        $message = '<p style="color: red;">Please choose a file to upload</p>';

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
<?php echo $message ?? null?> <!-- Null coalescing operator -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <!--enctype attribute specifies how the form-data should be encoded when
    submitting it to the server.
    multipart/form-data means that the form-data will be sent as a file. -->
    <label for="file">Upload File: </label>
    <input type="file" name="upload">
    <button type="submit" name="submit" value="submit">Upload</button>
</form>
</body>
</html>
