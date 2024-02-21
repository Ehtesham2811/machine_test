<?php

include('bootstrap.php');

?>

<!-- Post Blogs Button -->
 <div class="post" id="bttn">
    <a href="post_blog.php" class="button">Post Blogs</a>
</div> 

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection
include 'db.php';
session_start();

if (isset($_SESSION['loggedin'])) {
    
    $studentId = $_SESSION['studentId'];

    
    $stmt = $pdo->prepare("SELECT * FROM blogs WHERE student_id = ?");
    $stmt->execute([$studentId]);
    $blogs = $stmt->fetchAll();

    
    if ($blogs) :
        echo '<div class="container ">'; 
        


        foreach ($blogs as $blog) :
            echo '<div class="blog-item">';
            echo '<h1 class="text-center">' . $blog['title'] . '</h1>';
            echo '<p class="text-center">' . $blog['description'] . '</p>';

            
            $imageFileName = $blog['image'];
            $imagePath = 'uploads/' . $imageFileName;  

            if (file_exists($imagePath)) {
                echo '<div class="text-center ">';
                echo '<img class="rounded" src="' . $imagePath . '" alt="Blog Image" hight="400px" width="400px">';
                echo '</div>'; 
            } else {
                echo '<p style="color: red;">Image not found</p>';
            }

            echo '<hr>';
            echo '</div>'; 
        endforeach;

        echo '</div>'; 
    else :
        echo '<p>No blogs found.</p>';
    endif;
} else {
    
    header('Location: login.php');
    exit();
}
?>
<link rel="stylesheet" href="styles.css">
