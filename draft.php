<!DOCTYPE html>
<html>
<head>
    <title>Triangle Pattern Generator</title>
</head>
<body>
    <h2>Triangle Pattern Generator</h2>
    
    <form method="POST">
        <label>Enter number of rows:</label>
        <input type="number" name="rows" min="1" required>
        <br><br>
        <label>Select pattern style:</label>
        <select name="style">
            <option value="right">Right Triangle</option>
            <option value="pyramid">Pyramid</option>
            <option value="left">Left Triangle</option>
        </select>
        <input type="submit" value="Generate">
    </form>
    
    <br>
    
    <?php
    if (!empty($_POST["rows"])) {
        $rows = $_POST["rows"];
        $style = $_POST["style"];

        echo "<h3>".ucfirst($style)." Triangle ($rows rows):</h3><pre>";

        for ($i = 1; $i <= $rows; $i++) {
            if ($style == "right") {
                for ($j = 1; $j <= $i; $j++) echo "*";
            } elseif ($style == "pyramid") {
                for ($j = $rows; $j > $i; $j--) echo " ";
                for ($j = 1; $j <= 2*$i-1; $j++) echo "*";
            } else { // left
                for ($j = $rows; $j >= $i; $j--) echo "*";
            }
            echo "\n";
        }
        echo "</pre>";
    }
    ?>
</body>
</html>
