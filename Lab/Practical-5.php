<?php
echo "Using FOR Loop:\n";
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i\n";
}

echo "\nUsing WHILE Loop:\n";
$j = 1;
while ($j <= 5) {
    echo "Number: $j\n";
    $j++;
}

echo "\nUsing DO-WHILE Loop:\n";
$k = 1;
do {
    echo "Number: $k\n";
    $k++;
} while ($k <= 5);
?>
