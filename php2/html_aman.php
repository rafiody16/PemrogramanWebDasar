<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="input">Enter some text:</label>
        <input type="text" id="input" name="input"><br><br>
        <label for="input">Enter your email:</label>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            echo "Anda memasukkan: $input <br>";

            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email valid: $email <br>";
            } else {
                echo "Email tidak valid <br>";
            }
        }
    ?>
</body>
</html>