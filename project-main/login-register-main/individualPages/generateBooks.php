<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books_data";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from database
$sql = "SELECT id, title, author, num_pages, cover_photo FROM books_data";
$result = $conn->query($sql);

// Loop through each row of the result and generate HTML for each book
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Generate HTML content for the book
        ob_start(); // Start output buffering
        include "bookTemplate.php"; // Include a template file for the book page
        $content = ob_get_clean(); // Get the buffered output and clean the buffer

        // Save the generated HTML content to a file
        $filename = "{$row['id']}.html"; // Example: "book_pages/1.html"
        file_put_contents($filename, $content);
    }
}

// Close database connection
$conn->close();
?>
