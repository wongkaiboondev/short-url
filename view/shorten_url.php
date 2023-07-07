<?php 

    include '../view/header.php';
    include '../controller/validation.php';

    function check_session() {
        if (isset($_SESSION["shorten_url"])) {
            return true;
        } else {
            return false;
        }
    }
?>

<div class="wrapper">
    <h2>SHORTEN URL</h2>
    <form action="./controller/random_number.php" method="POST">
        <input type="text" placeholder="Enter your url" name = "original_url" 
        value = "<?php if(check_session()) { echo $_SESSION["shorten_url"]; } ?>" required>
        <button id="copy-btn" type="button">Copy</button>
    </form>
</div>

<?php 
    include './view/footer.php';
?>
<script>
    $(function() {
    var $btnCopy = $('#copy-btn');

    $btnCopy.on('click', function() {
        var clipboard = new Clipboard('#copy-btn');

        clipboard.on('success', function(e) {
        $btnCopy.text('Copied');

        setTimeout(function() {
            $btnCopy.text('Copy');
        }, 2000);
        });
    });
    });
</script>