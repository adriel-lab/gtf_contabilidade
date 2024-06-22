<?php
// edit_article.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Include your database connection logic here
    // Example assuming you have a database connection in a separate file
    include 'conexao.php'; // Replace with the actual file name

    // Get the article ID, updated title, and content from the POST data
    $articleId = $_POST['id'];
    $updatedTitle = $_POST['title'];
    $updatedContent = $_POST['body'];
    $updatedContent2 = $_POST['body2'];
    $updatedTags = $_POST['tags'];
    $updatedAssunto = $_POST['assunto'];
    $updatedLink = $_POST['link'];


    // Perform the update (replace this with your actual update logic)
    // Example: Update the article title and content in the database
    $sql = "UPDATE articles SET title = ?, body = ?, body2 = ?, tags = ?, subjects = ?, link = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $updatedTitle, $updatedContent, $updatedContent2, $updatedTags, $updatedAssunto, $updatedLink, $articleId);


    if ($stmt->execute()) {
        header("Location: blog.php");
        exit();
    } else {
        echo "Error editing article.";
    }

    $stmt->close();
    $conn->close();
} else {
    // Handle invalid requests (optional)
    echo "Invalid request.";
}
