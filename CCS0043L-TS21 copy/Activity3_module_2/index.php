<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Length Converter</title>
  
   
    </style>
</head>
<body>
    <div class="container">
        <h2>Length Converter</h2>
        <form method="post">
            <label>Enter value:</label>
            <input type="number" step="any" name="value" required>

            <label>Convert from:</label>
            <select name="from">
                <option value="m">Meter</option>
                <option value="cm">Centimeter</option>
                <option value="km">Kilometer</option>
            </select>

            <label>Convert to:</label>
            <select name="to">
                <option value="cm">Centimeter</option>
                <option value="m">Meter</option>
                <option value="km">Kilometer</option>
            </select>

            <button type="submit">Convert</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $value = $_POST["value"];
            $from = $_POST["from"];
            $to = $_POST["to"];
            $result = 0;

            switch ($from) {
                case "cm": $valueInMeters = $value / 100; break;
                case "km": $valueInMeters = $value * 1000; break;
                default:   $valueInMeters = $value; // meters
            }

            // Convert from meters to target unit
            switch ($to) {
                case "cm": $result = $valueInMeters * 100; break;
                case "km": $result = $valueInMeters / 1000; break;
                default:   $result = $valueInMeters; // meters
            }

            echo "<div class='result-box'>{$value} $from = $result $to</div>";
        }
        ?>
    </div>
</body>
</html>