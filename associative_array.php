<?php
// Define an associative array
$user = [
    "name" => "John Doe",
    "email" => "john.doe@example.com",
    "age" => 30,
    "is_active" => true
];

// Accessing elements
echo "Name: " . $user["name"] . "\n";       // Output: Name: John Doe
echo "Email: " . $user["email"] . "\n";     // Output: Email: john.doe@example.com
echo "Age: " . $user["age"] . "\n";         // Output: Age: 30
echo "Is Active: " . ($user["is_active"] ? "Yes" : "No") . "\n"; // Output: Is Active: Yes

// Adding a new element
$user["location"] = "New York";
echo "Location: " . $user["location"] . "\n"; // Output: Location: New York

// Modifying an element
$user["age"] = 31;
echo "Updated Age: " . $user["age"] . "\n"; // Output: Updated Age: 31

// Removing an element
unset($user["is_active"]);
var_dump($user);
?>
