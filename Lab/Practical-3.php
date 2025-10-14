<?php
$marks = 80;

echo "Marks obtained: $marks\n";

// Nested if to check grade
if ($marks >= 0 && $marks <= 100) {
    if ($marks >= 90) {
        echo "Grade: A+ \n";
    } else {
        if ($marks >= 75) {
            echo "Grade: A \n";
        } else {
            if ($marks >= 60) {
                echo "Grade: B \n";
            } else {
                if ($marks >= 50) {
                    echo "Grade: C \n";
                } else {
                    echo "Grade: F \n";
                }
            }
        }
    }
} else {
    echo "Invalid marks entered.\n";
}
?>
