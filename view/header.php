<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
<html lang="en">
<head>
    <title>URL Shortener</title>
    <link rel="icon" type="image/png" href="../asset/tinywow_logo_28122598.png" >
    <link href="../dist/output.css" rel="stylesheet">
    <link href="../asset/font/css/fontawesome.css" rel="stylesheet">
    <link href="../asset/font/css/solid.css" rel="stylesheet">
    <link href="../asset/font/css/regular.css" rel="stylesheet">
    <link href="../asset/font/css/all.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="bg-slate-100">