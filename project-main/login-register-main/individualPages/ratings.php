<?php
session_start();  // Ensure session is started

include 'db_connection.php';  // Database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");  // Redirect if not logged in
        exit;
    }

    // Get the user_id from the session
    $user_id = $_SESSION['user_id'];
    $book_id = $_POST['book_id'];  // ID of the book being rated
    $rating = intval($_POST['rating']);  // The rating value

    // Insert the rating into the database
    $query = "INSERT INTO ratings (user_id, book_id, rating) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iii", $user_id, $book_id, $rating);  // Use user_id from session
    $stmt->execute();
    $stmt->close();

    // Redirect back to the book details page
    header("Location: $book_id.html);
}
?>
