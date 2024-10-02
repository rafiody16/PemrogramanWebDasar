<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <!-- <h3>Date</h3> -->
     <h3> Time </h3>
    <?php 
        // echo "Today is ". date("Y/m/d") . "<br>";
        // echo "Today is ". date("Y.m.d") . "<br>";
        // echo "Today is ". date("Y-m-d") . "<br>";
        // echo "Today is ". date("l");
        date_default_timezone_set("asia/jakarta");
        echo date("h:i:sa");
    ?> 
</body>
</html>