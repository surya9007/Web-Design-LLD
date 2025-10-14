<?php
//Simple Calculator

echo "Welcome to Simple Calculator\n";
echo "1. Addition\n";
echo "2. Subtraction\n";
echo "3. Multiplication\n";
echo "4. Division\n";
echo "5. Exit\n\n";

// For CLI input, use readline (for browser, use form)
$choice = (int)readline("Enter your choice (1-5): ");

if ($choice >=1 && $choice <=4) {
    $num1 = (float)readline("Enter first number: ");
    $num2 = (float)readline("Enter second number: ");
}

switch ($choice) {
    case 1:
        $result = $num1 + $num2;
        echo "Addition: $num1 + $num2 = $result\n";
        break;
    case 2:
        $result = $num1 - $num2;
        echo "Subtraction: $num1 - $num2 = $result\n";
        break;
    case 3:
        $result = $num1 * $num2;
        echo "Multiplication: $num1 * $num2 = $result\n";
        break;
    case 4:
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "Division: $num1 / $num2 = $result\n";
        } else {
            echo "Error: Division by zero is not allowed.\n";
        }
        break;
    case 5:
        echo "Exiting program. Goodbye!\n";
        break;
    default:
        echo "Invalid choice. Please enter a number between 1 and 5.\n";
}
?>
