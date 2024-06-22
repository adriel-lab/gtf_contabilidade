<?php
// delete_article.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Include your database connection logic here
    // Example assuming you have a database connection in a separate file
    include 'conexao.php'; // Replace with the actual file name

    // Get the article ID from the POST data
    $articleId = $_POST['id'];

    // Perform the deletion (replace this with your actual deletion logic)
    // Example: Delete the article from the database
    $sql = "DELETE FROM articles WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $articleId);

    if ($stmt->execute()) {
        // Redirect to blog.php after successful delete
        header("Location: blog.php");
        exit(); // Ensure that no further code is executed after the redirect
    } else {
        echo "Error deleting article.";
    }

    $stmt->close();
    $conn->close();
} else {
    // Handle invalid requests (optional)
    echo "Invalid request.";
}
?>
