<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form action="post" action="<?= $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <p>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>
    </p>
</body>
</html>