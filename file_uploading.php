<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Upload</title>
</head>
<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h3>Select file to upload</h3>
        <input type="file" name="file_to_upload"><br>
        <input type="submit" value="Upload File" style="margin-top: 20px;">
    </form>
    
</body>
</html>

<?php
    // This is for uploading and deleting files. ie images, pdfs, etc.
    // Done in upload.php


?>