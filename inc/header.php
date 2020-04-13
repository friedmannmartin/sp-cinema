<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta informace o strankach -->
    <meta name="description" content="Webové stránky kina Cinema, prohlédně si program promítaní a případně si jedno rovnou rezervujte.">
    <meta name="keywords" content="Cinema,Movies,Films,Multiplex">
    <meta name="author" content="Martin Friedmann">

    <!-- Linky na css styly a fontawesome -->
    <script src="https://kit.fontawesome.com/3fa5a0f828.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="scss/main.css">

    <title><?=$pageTitle?></title>
</head>
<body>
<header>
    <a href="../index.php">
        <h1>Cinema</h1>
    </a>
    <?php
        if (!empty($_SESSION['user_id'])){
          echo htmlspecialchars($_SESSION['user_name']);
          echo '<a href="../logout.php"><i class="fas fa-sign-out-alt"></i></a>';
        }else{
          echo '<a href="../login.php"><i class="fas fa-sign-in-alt"></i></a>';
        }
    ?>
</header>
