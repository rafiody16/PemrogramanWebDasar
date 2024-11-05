<?php 

if (isset($_POST["submit"])) {
    $targetDirectory = "documents/";
    if (!is_dir($targetDirectory)) {
        mkdir($targetDirectory, 0777, true); // 0777 untuk memberikan izin baca/tulis penuh
    }
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtension = array("txt", "pdf", "doc", "jpg");
    $maxFileSize = 5 * 1024 * 1024;

    if (in_array($fileType, $allowedExtension) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah";
        } else {
            echo "Gagal mengunggah file";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }

}

?>