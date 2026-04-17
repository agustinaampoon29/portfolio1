<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nested For Loop</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>

    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="number" required>
        <button type="submit">Submit</button> 
    </form>

    <?php
    if (!empty($_POST["number"])) {
        $number = $_POST["number"];
        for ($i = 1; $i <= $number; $i++) { // decides how many rows ang eprint
            for ($w = 1; $w <= $i; $w++) { // decides how many stars go in each row
                echo " * ";
            }
            echo "<br>";
        }
    }
    ?>

</body>
</html>
