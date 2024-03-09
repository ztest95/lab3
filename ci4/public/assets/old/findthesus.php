<?php

// PHP: Variables
$score = intval($_GET['score']);

$randomNumber = rand(0, 2);
// PHP: Data Types
$message = NULL;

// PHP: Conditionals
if ($score > 4) {
    $message = "You won!";
}

// Output the response as JSON
header('Content-Type: application/json');
// PHP: Echo / Print
echo json_encode(
    // PHP: Arrays
    [
        'score' => $score,
        'randomNumber' => $randomNumber,
        'message' => $message
    ]
);


?>