<h1>
    Activity number 1
    <br>
    PHP supports several types of operators:
    <ul>
        <li><strong>Arithmetic Operators</strong>: +, -, *, /, %, **</li>
        <li><strong>Assignment Operators</strong>: =, +=, -=, *=, /=, %=</li>
        <li><strong>Comparison Operators</strong>: ==, ===, !=, !==, &gt;, &lt;, &gt;=, &lt;=, &lt;=&gt;</li>
        <li><strong>Increment/Decrement Operators</strong>: ++$x, $x++, --$x, $x--</li>
        <li><strong>Logical Operators</strong>: and, or, xor, &amp;&amp;, ||, !</li>
        <li><strong>String Operators</strong>: ., .= (concatenation and concatenation assignment)</li>
        <li><strong>Array Operators</strong>: +, ==, ===, !=, &lt;&gt;, !==</li>
        <li><strong>Conditional (Ternary) Operator</strong>: ?:, ??</li>
        <li><strong>Bitwise Operators</strong>: &amp;, |, ^, ~, &lt;&lt;, &gt;&gt;</li>
        <li><strong>Execution Operators</strong>: backticks (<code>&#96;command&#96;</code>)</li>
        <li><strong>Type Operators</strong>: instanceof</li>
    </ul>
</h1>




<?php
$number = 7;

if ($number % 2 == 0) {
    echo "$number is EVEN.";
} else {
    echo "$number is ODD.";
}
?>
<br>
<br>
<br>

<?php
for ($i = 10; $i <= 100; $i += 10) {
    echo $i . " ";
}
?>
