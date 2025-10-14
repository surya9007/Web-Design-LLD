<?php
$emails = [
    "suresh@example.com",
    "mahesh3@domain.org",
    "invalid-email",
    "test.user@sub.domain.com"
];

// Regular Expression Pattern
$pattern = "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i";

foreach ($emails as $email) {
    if (preg_match($pattern, $email)) {
       echo "$email is a valid email.\n";
    } else {
        echo "$email is NOT a valid email.\n";
    }
}
?>
