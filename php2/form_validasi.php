<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Submit">
    </form>

    <div id="hasil">

    </div>
    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault();
                var password = $("#password").val();
                if (password.length < 8) {
                    alert("Password minimal 8 karakter");
                    return;
                }
                var formData = $("#myForm").serialize();
                $.ajax({
                    url: "proses_validasi.php",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        $("#hasil").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>