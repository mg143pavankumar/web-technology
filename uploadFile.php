<?php
$target_dir = "./uploads/";
$target_file = $target_dir . basename($_FILES['pic']["name"]);

$isUploaded = true;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


// check if image file is a actural image or fake image
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['pic']['tmp_name']);

    if ($check != false) {
        echo "File is an image - " . $check['mime'] . ".";
        $isUploaded = true;
    } else {
        echo "File is not an image";
        $isUploaded = false;
    }
}


// check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exits";
    $isUploaded = false;
}

// check file size
if ($_FILES['pic']['size'] > 5000000) {
    echo "Sorry, your file is too large";
    $isUploaded = false;
}

// Allow certain file formats
if ($imageFileType != 'jpg' && $imageFileType != "png" && $imageFileType != 'jpeg') {
    echo "Sorry, only JPG, PNG, JPEG files are allowed";
    $isUploaded = false;
}

// check if $isUploaded is set to false by an error
if ($isUploaded == false) {
    echo "Sorry, you file was not uploaded";
} else {
    if (move_uploaded_file($_FILES['pic']['tmp_name'], $target_file)) {
        echo "The file " . htmlspecialchars(basename(
            $_FILES['pic']['name']
        )) . "has been uploaded";
    } else {
        echo "Sorry, there was an error in uploading your file";
    }
}
