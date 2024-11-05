<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
    <div id="thumbnailContainer">
        <img id="thumbnail" src="" alt="Thumbnail Preview" style="display: none; width: 200px;">
    </div>
    <script>
        document.getElementById('fileToUpload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const thumbnail = document.getElementById('thumbnail');
                thumbnail.src = URL.createObjectURL(file);
                thumbnail.style.display = 'block';
            }
        });
    </script>
</body>
</html>