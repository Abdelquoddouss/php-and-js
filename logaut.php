<?php
    session_start();
    session_destroy();
    $path = "./views/signin.php";
    header("Location: ".$path);
    exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>you r now loged out</h2>
    <a href="./views/signin.php">please loged in</a>
</body>
</html>