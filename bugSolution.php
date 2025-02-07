<?php
$filename = 'data.json';

// Check if the file exists and is readable
if (!file_exists($filename) || !is_readable($filename)) {
    die('Error: File not found or not readable.');
}

$json_data = file_get_contents($filename);

// Check if file_get_contents() succeeded
if ($json_data === false) {
    die('Error: Failed to read the file.');
}

// Decode the JSON data and handle potential errors
$data = json_decode($json_data, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error: Invalid JSON data.');
}

//Further validation can be added here to check the structure of the decoded JSON.

//Use the data
var_dump($data);
?> 