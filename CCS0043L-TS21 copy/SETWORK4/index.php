<form method="post">
    <label>Enter words (comma separated):</label><br>
    <input type="text" name="words" style="width:300px;" value="<?php echo isset($_POST['words']) ? htmlspecialchars($_POST['words']) : ''; ?>"><br>
    <input type="submit" value="Submit">
</form>
<br>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['words'])) {
    $words = array_map('trim', explode(',', $_POST['words']));
} else {
    $words = ['racecar', 'moon', 'noon', 'level', 'civic', 'deed', 'yolo', 'pop', 'push', 'mom'];
}
$palindromes = [];

foreach ($words as $word) {
    if ($word == strrev($word)) {
        $palindromes[] = $word;
    }
}

$palindromeString = implode(" ", $palindromes);

echo "Original Palindrome String: " . $palindromeString . "<br>";
echo "String Length: " . strlen($palindromeString) . "<br>";
echo "Lowercase: " . strtolower($palindromeString) . "<br>";
echo "Uppercase: " . strtoupper($palindromeString) . "<br>";
echo "Uppercase First Character: " . ucfirst($palindromeString) . "<br>";
echo "Uppercase Each Word: " . ucwords($palindromeString) . "<br>";
?>
<br>
<br>

<?php
$grades = [];

for ($i = 0; $i < 10; $i++) {
    $grades[] = rand(0, 100);
}

$lowest = min($grades);
$highest = max($grades);
$average = array_sum($grades) / count($grades);

echo "Grades: " . implode(", ", $grades) . "<br>";
echo "Lowest Grade: $lowest<br>";
echo "Highest Grade: $highest<br>";
echo "Average Grade: " . number_format($average, 2) . "<br>";
?>

<br>
<br>


<?php
$birthday = mktime(5, 51, 14, 9, 30, 2005); // hour, minute, second, month, day, year
echo "My Birthday is on " . date("l jS \of F Y h:i:s A", $birthday);
?>


