<?php

include('bootstrap.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Student Login Form -->

<div class="container login-container col-md-4 ">
    
<form action="login_backend.php" method="post">

    <div class="mt-3 mb-3">
    <label>Roll Number:</label>
    <input type="text" name="roll_number" required><br>
     </div>
 

     <div class=" mt-3 mb-3">
    <label>Password:</label>
    <input type="password" name="password" required><br>
</div>

    <button type="submit">Login</button>
</form>
</div>
</div>


</body>
</html>