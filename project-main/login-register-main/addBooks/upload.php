<?php
if(isset($_POST["submit"])) {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $numPages = $_POST["num_pages"];
    
    // Read the contents of the uploaded file into a variable
    $coverPhoto = file_get_contents($_FILES["cover_photo"]["tmp_name"]);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "books_data";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO books_data (title, author, rating, num_pages, cover_photo) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdis", $title, $author, $rating, $numPages, $coverPhoto);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
