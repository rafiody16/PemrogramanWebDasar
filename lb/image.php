<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Pengaturan Gambar pada Bootstrap</h2>
        <div class="row row-cols-1">
            <div class="col">
                <img src="tower.jpg" alt="gambar round" class="rounded">
            </div>
            <div class="col">
                <img src="tower.jpg" alt="gambar ciricle" class="rounded-circle">
            </div>
            <div class="col">
                <img src="tower.jpg" alt="gambar thumbnail" class="img-thumbnail">
            </div>
            <div class="col">
                <img src="tower.jpg" alt="gambar thumbnail" class="img-fluid">
            </div>
        </div>
    </div>
</body>
</html>