<?php

// 1. Numbers and Math functions
echo "=== Numbers and Math Functions ===<br>";
$number1 = 10;
$number2 = 3;

echo "Addition: " . ($number1 + $number2) . "<br>";
echo "Subtraction: " . ($number1 - $number2) . "<br>";
echo "Multiplication: " . ($number1 * $number2) . "<br>";
echo "Division: " . ($number1 / $number2) . "<br>";
echo "Power: " . pow($number1, $number2) . "<br>";
echo "Square root of 100: " . sqrt(100) . "<br>";
echo "Max: " . max($number1, $number2) . "<br>";
echo "Min: " . min($number1, $number2) . "<br>";
echo "Absolute of -5: " . abs(-5) . "<br>";
echo "<br>";

// 2. String and String functions
echo "=== Strings and String Functions ===<br>";
$text = "Hello PHP World";

echo "Original: " . $text . "<br>";
echo "Length: " . strlen($text) . "<br>";
echo "Word count: " . str_word_count($text) . "<br>";
echo "Reversed: " . strrev($text) . "<br>";
echo "Position of 'PHP': " . strpos($text, "PHP") . "<br>";
echo "Replace 'PHP' with 'Programming': " . str_replace("PHP", "Programming", $text) . "<br>";
echo "<br>";

// 3. Arrays and Array functions
echo "=== Arrays and Array Functions ===<br>";
$languages = array("PHP", "JavaScript", "Python");

echo "Array content: ";
print_r($languages);
echo "<br>Total elements: " . count($languages) . "<br>";

array_push($languages, "C++");
echo "After adding C++: ";
print_r($languages);
echo "<br>";

array_pop($languages);
echo "After removing last element: ";
print_r($languages);
echo "<br>";

sort($languages);
echo "After sorting: ";
print_r($languages);
echo "<br><br>";

// 4. Conditions
echo "=== Conditions ===<br>";

// if - else
$age = 20;

if ($age >= 18) {
    echo "You are an adult<br>";
} else {
    echo "You are a minor<br>";
}

// if - elseif - else
$score = 85;

if ($score >= 90) {
    echo "Grade: A<br>";
} elseif ($score >= 75) {
    echo "Grade: B<br>";
} else {
    echo "Grade: C or lower<br>";
}

// switch
$day = "Friday";

switch ($day) {
    case "Monday":
        echo "Start of the week<br>";
        break;
    case "Friday":
        echo "End of the work week<br>";
        break;
    default:
        echo "Just another day<br>";
}

?>