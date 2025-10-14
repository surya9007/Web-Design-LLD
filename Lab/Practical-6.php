<?php
echo "PHP Arrays and Sorting Example\n\n";

// Create an array
$numbers = [45, 12, 78, 34, 56, 10];

echo "Original Array:\n";
print_r($numbers);
echo "\n";

// 1. sort() - Ascending order
sort($numbers);
echo "After sort() - Ascending Order:\n";
print_r($numbers);
echo "\n";

// 2. rsort() - Descending order
rsort($numbers);
echo "After rsort() - Descending Order:\n";
print_r($numbers);
echo "\n";

// Recreate original array for associative sorting demo
$assocNumbers = [
    "a" => 45,
    "b" => 12,
    "c" => 78,
    "d" => 34
];

echo "Original Associative Array:\n";
print_r($assocNumbers);
echo "\n";

// 3. asort() - Ascending order maintaining key association
asort($assocNumbers);
echo "After asort() - Ascending Order (key maintained):\n";
print_r($assocNumbers);
echo "\n";

// 4. arsort() - Descending order maintaining key association
arsort($assocNumbers);
echo "After arsort() - Descending Order (key maintained):\n";
print_r($assocNumbers);
echo "\n";
?>
  