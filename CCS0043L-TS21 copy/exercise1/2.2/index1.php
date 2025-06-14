<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 10]; // Only 9 numbers, let's add one more
$numbers[] = 9; // Now 10 numbers

$sum = array_sum($numbers);
$difference = $numbers[0];
$product = $numbers[0];
$quotient = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
    $difference -= $numbers[$i];
    $product *= $numbers[$i];
    $quotient /= $numbers[$i];
}

echo "Array list: " . implode(", ", $numbers) . "<br>";
echo "Addition = $sum<br>";
echo "Subtraction = $difference<br>";
echo "Multiplication = $product<br>";
echo "Division = $quotient<br>";
?>
<!-- number 3 code  -->
<br>
<br>
<br>
<h1>Activity number 3 </h1>
<?php
function calculate($a, $b, $c) {
    $sum = $a + $b + $c;
    $difference = $a - $b - $c;
    $product = $a * $b * $c;
    $quotient = $a / $b / $c;

    echo "My Parameter values: $a, $b, $c<br>";
    echo "Addition = $sum<br>";
    echo "Subtraction = $difference<br>";
    echo "Multiplication = $product<br>";
    echo "Division = $quotient<br>";
}

// Example usage
calculate(25, 13, 6);
?>

