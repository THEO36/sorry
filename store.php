<?php
header('Content-Type: application/json');

$correctPassword = "sorry";

// Read incoming JSON
$input = json_decode(file_get_contents("php://input"), true);
$enteredPassword = strtolower(trim($input['password'] ?? ''));

// Check
if ($enteredPassword === strtolower($correctPassword)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
