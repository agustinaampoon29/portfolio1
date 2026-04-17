<!DOCTYPE html>
<html>
<head>
    <title>Triangle Pattern Generator</title>
</head>
<body>
    <h2>Triangle Pattern Generator</h2>
    
    <form method="POST" action="">
        <label for="rows">Enter number of rows:</label>
        <input type="number" id="rows" name="rows" min="1" required>
        <br><br>
        <label>Select pattern style:</label>
        <select name="style">
            <option value="right">Right Triangle</option>
            <option value="pyramid">Pyramid</option>
            <option value="left">Left Triangle</option>
        </select>
        <input type="submit" value="Generate Pattern">
    </form>
    
    <br>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["rows"])) {
        $rows = (int)$_POST["rows"];
        $style = $_POST["style"] ?? "right";
        
        if ($rows > 0) {
            echo "<h3>" . ucfirst($style) . " Triangle Pattern ($rows rows):</h3>";
            echo "<pre>";
            
            switch ($style) {
                case "right":
                    // Right triangle
                    for ($i = 1; $i <= $rows; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo "*";
                        }
                        echo "\n";
                    }
                    break;
                    
                case "pyramid":
                    // Pyramid triangle
                    for ($i = 1; $i <= $rows; $i++) {
                        for ($j = $rows; $j > $i; $j--) {
                            echo " ";
                        }
                        for ($k = 1; $k <= (2 * $i - 1); $k++) {
                            echo "*";
                        }
                        echo "\n";
                    }
                    break;
                    
                case "left":
                    // Left triangle (inverted right triangle)
                    for ($i = $rows; $i >= 1; $i--) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo "*";
                        }
                        echo "\n";
                    }
                    break;
            }
            
            echo "</pre>";
        } else {
            echo "<p>Please enter a positive number.</p>";
        }
    }
    ?>
</body>
</html>