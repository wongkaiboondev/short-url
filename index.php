<?php 

    include './view/header.php';
    // include './controller/validation.php';
?>

<div class="container max-w-4xl mx-auto mt-5">
    <h2 class="text-6xl text-center">SHORT URL</h2>
    <div class="mx-auto mt-8 max-w-4xl border-2 pt-5 px-10 bg-slate-50 drop-shadow-md rounded-md">
        <h2 class="text-2xl text-center">Paste the URL to be shortened</h2>    
        <div class="mt-10">
            <form action="./controller/validation.php" method="POST">
                <div class="grid grid-cols-12">
                    <div class="col-span-9">
                        <input type="text" class = "border-2 border-slate-200 hover:border-slate-300 focus:hover:border-slate-300 py-2 pl-4 w-full rounded-xl" placeholder="Enter your url" name = "original_url" value = ""  required>
                        <?php 
                            if ($_SESSION['error'] ?? 0) { 
                            $error_message = $_SESSION['error'];
                            echo ' 
                            <div class="mt-1 ml-2">
                                <div class="col">
                                    <label id="error-message" class="text-red-500">'. $error_message .'</label>
                                </div>
                                <div class="col">
                                </div>
                            </div>
                            ';
                        }?>
                    </div>
                    <div class="col-span-3 text-center">
                        <button id="short-btn" class="bg-blue-500 p-2 rounded-xl text-slate-100 px-4" type="submit">Shorten</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    include './view/footer.php';
?>
