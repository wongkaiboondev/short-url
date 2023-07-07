<?php 

    include './view/header.php';
    include './controller/validation.php';
?>

<div class="container text-center">
    <div class="row">
        <h2>SHORT URL</h2>
    </div>
    <div class="row">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="row">
                <div class="col">
                    <input type="text" class = "form-control" placeholder="Enter your url" name = "original_url " required>
                </div>
                <div class="col">
                    <button id="short-btn" type="submit">Shorten</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label id="error-message" class="text-danger"> <?php if ($error) { echo $error_message; }?> </label>
                    <p></p>
                </div>
                <div class="col">
                </div>
            </div>
        </form>
    </div>
</div>

<?php 
    include './view/footer.php';
?>
