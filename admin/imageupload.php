<?php

    $file=$_FILES['filetoupload']['tmp_name'];
    $target_dir = "../uploads/";

    $file_array = explode(".", $_FILES["fileToUpload"]["name"]);    
    $file_extension = end($file_array);
    $new_file_name = md5(microtime(true).mt_Rand()) . "." . $file_extension;   
    $uploadOk = 1;  

    
    
    if ($_FILES["filetoupload"]["size"] > 1000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($file_extension != "jpg" && $file_extension != "png" && $file_extension != "jpeg"
    && $file_extension != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    
    if ($uploadOk !=0 ){
        if (move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_dir.$new_file_name)) {
            // echo "The file has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


?>