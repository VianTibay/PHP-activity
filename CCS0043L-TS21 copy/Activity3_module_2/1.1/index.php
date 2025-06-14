<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grade Ranking Program</title>
    <link rel="stylesheet" href="../1.1/style1.1.css">
</head>
<body>
    <div class="card">
        <form method="post">
            <div class="section">
                Name: <input type="text" name="name" placeholder="First M. Last" required>
            </div>

            <div class="section">
                Grade: <input type="number" name="grade" min="0" max="100" required>
            </div>

            <button type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $grade = $_POST["grade"];

            // Determine rank
            if ($grade >= 93 && $grade <= 100) {
                $rank = "A";
            } elseif ($grade >= 90 && $grade <= 92) {
                $rank = "A-";
            } elseif ($grade >= 87 && $grade <= 89) {
                $rank = "B+";
            } elseif ($grade >= 83 && $grade <= 86) {
                $rank = "B";
            } elseif ($grade >= 80 && $grade <= 82) {
                $rank = "B-";
            } elseif ($grade >= 75 && $grade <= 79) {
                $rank = "C";
            } else {
                $rank = "F";
            }

            echo "<div class='box-row'>
                    <div class='box'><strong>Rank:</strong><br>$rank</div>
                    <div class='box'><strong>Grade:</strong><br>$grade</div>
                    <div class='picture-box'>Picture</div>
                  </div>";
            echo "<div class='section'><strong>Name:</strong> $name</div>";
        }
        ?>
    </div>
</body>
</html>
