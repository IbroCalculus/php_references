<?php

    // ==== UPLOADING A FILE ===== 

    $dir = "uploads/";  //The directory where files will be uploaded.

    // File Information
    $file = $dir . basename($_FILES["file_to_upload"]["name"]); // 1. File name. file_to_upload is from the HTML form, name(constant) is whatever the name of the selected file is.
    
    // Extra file informations
    $fileTmpName = $_FILES['file_to_upload']['tmp_name'];
    $fileSize = $_FILES['file_to_upload']['size'];
    $fileError = $_FILES['file_to_upload']['error'];

    if(move_uploaded_file($_FILES["file_to_upload"]["tmp_name"], $file)){
        echo "Image uploaded successfully";
    }else{
        echo "Error uploading file";
    }




    // ==== DELETING A FILE ===== 

    // Assuming the file name given already exists within the uploaded files directory
    // $file_to_delete = $dir . "20221208_075056.jpg";
    // if(unlink($file_to_delete)){
    //     echo "File deleted successfully";
    // }else{
    //     echo "Error deleting file";
    // }


?>