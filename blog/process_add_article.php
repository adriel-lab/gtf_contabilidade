<?php
// process_add_article.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Include your database connection logic here
    // Example assuming you have a database connection in a separate file
    include 'conexao.php'; // Replace with the actual file name

    // Get the title and body of the new article from the POST data
    $title = $_POST['title'];
    $body = $_POST['body'];
    $body2 = $_POST['body2'];
    $assunto = $_POST['assunto'];
    $tags = $_POST['tags'];
    $link = $_POST['link'];

    // Perform the insertion (replace this with your actual insert logic)
    // Example: Insert the new article into the database
    $sql = "INSERT INTO articles (title, body, body2, created_at, subjects, tags, link) VALUES (?, ?, ?, NOW(), ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $title, $body, $body2, $assunto, $tags, $link);



    if ($stmt->execute()) {
        // Redirect to blog.php after successful insertion
        header("Location: blog.php");
        exit(); // Ensure that no further code is executed after the redirect
    } else {
        echo "Error adding new article.";
    }

    $stmt->close();
    $conn->close();
} else {
    // Handle invalid requests (optional)
    echo "Invalid request.";
}
