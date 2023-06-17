<?php
$languages = $_POST['language']; // Assuming 'language' is an array of selected languages
// Generate the column names
$columns = '';
foreach ($languages as $language) {
    $columnName = 'language_' . strtolower($language); // Generate column name, e.g., 'language_english'
    $columns .= "`$columnName`, "; // Append column name to the list
}

// Remove the trailing comma and space
$columns = rtrim($columns, ', ');

// Generate the placeholder values for the prepared statement
$placeholders = rtrim(str_repeat('?, ', count($languages)), ', ');

// Prepare the SQL query
$sql = "INSERT INTO your_table_name ($columns) VALUES ($placeholders)";

// Prepare the statement
$stmt = $pdo->prepare($sql);
// Bind and execute the statement for each language value
foreach ($languages as $language) {
    $stmt->bindValue(":$language", $value); // Assuming you have the value to insert for each language

    // Execute the statement
    if ($stmt->execute()) {
        echo "Language value inserted successfully.";
    } else {
        echo "Error inserting language value.";
    }
}


?>