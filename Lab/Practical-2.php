<?php
echo "PHP Type Casting Example\n\n";

// Original Variables
$var1 = "123";         // string
$var2 = 10.7;          // float
$var3 = 0;             // integer
$var4 = "true";         // string
$var5 = 5;             // integer

echo "Original Values and Types:\n";
echo "var1 = $var1 (".gettype($var1).")\n";
echo "var2 = $var2 (".gettype($var2).")\n";
echo "var3 = $var3 (".gettype($var3).")\n";
echo "var4 = $var4 (".gettype($var4).")\n";
echo "var5 = $var5 (".gettype($var5).")\n\n";

// Type Casting
$intVar = (int)$var2;      // float to integer
$floatVar = (float)$var1;  // string to float
$stringVar = (string)$var5; // integer to string
$boolVar = (bool)$var3;     // integer 0 to boolean false
$arrayVar = (array)$var4;   // string to array

echo "After Type Casting:\n";
echo "intVar = $intVar (".gettype($intVar).")\n";
echo "floatVar = $floatVar (".gettype($floatVar).")\n";
echo "stringVar = $stringVar (".gettype($stringVar).")\n";
echo "boolVar = ";
var_export($boolVar);
echo " (".gettype($boolVar).")\n";
echo "arrayVar = ";
print_r($arrayVar);
echo " (".gettype($arrayVar).")\n";
?>
