<?php 

if (isset($_FILES["file"])) {
    $errors = array();
    $extension = array("png", "jpg", "jpeg", "gif");

    $totalFiles = count($_FILES["file"]["name"]);

    for ($i = 0; $i < $totalFiles; $i++) { 
        $file_name = $_FILES["file"]["name"][$i];
        $file_size = $_FILES["file"]["size"][$i];
        $file_tmp = $_FILES["file"]["tmp_name"][$i];
        $file_type = $_FILES["file"]["type"][$i];
        
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $extension)) {
            $errors[] = "Ekstensi file yang diizinkan adalah PNG, JPG, JPEG, GIF.";
        }

        if ($file_size > 2097152) {
            $errors[] = "Ukuran file yang diizinkan adalah maksimal 2 MB.";
        }

        if (empty($errors)) {
            if (!is_dir("documents")) {
                mkdir("documents");
            }
            $targetFile = "documents/" . basename($file_name);
            move_uploaded_file($file_tmp, $targetFile);
            echo "File $file_name berhasil diunggah.<br>";
        } else {
            echo "Error uploading $file_name: " . implode(" ", $errors) . "<br>";
            $errors = [];
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}

?>
