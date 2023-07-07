<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
<html lang="en">
<head>
    <title>URL Shortener</title>
    <link rel="icon" type="image/png" href="../asset/tinywow_logo_28122598.png" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>


<body>