<html lang="en">
<head>
    <title>URL Shortener</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Main</a>
        </li>   
        <li class="nav-item">
            <a class="nav-link" href="#">Top Platform Search</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Analytic</a>
        </li>
        <li class="nav-item">
            <a class="nav-link">Logout</a>
        </li>
    </ul>
    <div class="wrapper">
        <h3>this is the new </h3>
        <form action="./controller/random_number.php" method="POST">
            <input type="text" placeholder="Enter your url" name = "original_url" required>
            <button class = "short-btn" type="submit">Shorten</button>
        </form>
        <div class="count">
            <span>Total Links: <span>10</span> & Total Clicks</span>
        </div>
        <div class="url-area">
            <div class="title">
                <li>Shorten URL</li>
                <li>Original URL</li>
                <li>Clicks</li>
                <li>Actions</li>
        </div>
    </div>
</body>
</html>

<footer>
    <!-- <script src="script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</footer>