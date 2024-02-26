<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $botName = $_POST["bot-name"];
    $description = $_POST["description"];
    $appearance = $_POST["appearance"];
    $systemPrompt = $_POST["system-prompt"];
    $publicPrivateToggle = isset($_POST["public-private-toggle"]) ? 1 : 0;
    $publicDescription = isset($_POST["public-description"]) ? $_POST["public-description"] : "";

    // Database connection parameters
    $servername = "localhost:3306";
    $username = "root";
    $password = "Tye858k24.3008";
    $dbname = "spaarowDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO Bot (name, description, appearance, system_prompt, is_public, public_description) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssis", $botName, $description, $appearance, $systemPrompt, $publicPrivateToggle, $publicDescription);

    // Execute SQL statement
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>