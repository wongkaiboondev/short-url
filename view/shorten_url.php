<?php

include '../view/header.php';

function check_session()
{
    if (isset($_SESSION["shorten_url"])) {
        return true;
    } else {
        return false;
    }
}
?>

<section class="container max-w-4xl mx-auto mt-5">
    <h2 class="text-4xl text-center font-bold text-purple-700">SHORT URL</h2>
    <div class="mx-auto mt-4 max-w-4xl border-2 pt-5 px-10 bg-slate-50 drop-shadow-md">
        <h2 class="text-3xl font-bold">Your shortened URL</h2>
        <p>Copy the shortened link and share it in messages, texts, posts, websites and other locations.</p>
        <div class="mt-10">
            <div class="grid grid-cols-12 justify-stretch">
                <div class="col-span-10">
                    <input type="text" class="border-2 border-slate-200 hover:border-slate-300 focus:hover:border-slate-300 py-2 pl-4 w-full rounded-xl" placeholder="Enter your url" name="original_url" id="shorten_url"value="<?php if (check_session()) {
                                                                                                                                                                                                                        echo $_SESSION["shorten_url"];
                                                                                                                                                                                                                    } ?>" required>
                </div>

                <div class="col-span-2 text-center">
                    <button id="copy-btn" class="bg-blue-500 p-2 rounded-xl text-slate-100 px-4" type="submit">Copy<i class="fa-solid fa-clipboard-list ml-2" style="color: #ffffff;"></i></button>
                </div>
            </div>
            <p class="inline-block mr-2 my-2"> Long URL :</p><span class="text-blue-500"><?php if (check_session()) {
                                                                                                echo $_SESSION["original_url"];
                                                                                            } ?></span>

            <div class="my-8">
                <div class="my-3"><a href="../index.php" class="border-2 border-violet-500 bg-violet-500 text-slate-50 rounded-md p-1">Total of clicks of your shortened URL</a></div>
                <div class="my-3"><a href="../index.php" class="border-2 border-violet-500 bg-violet-500 text-slate-50 rounded-md p-1">Shorten another URL</a></div>
            </div>
        </div>

        <div class="mt-10 mb-3">
            <h2 class="font-bold text-2xl">Share URL</h2>
        </div>
        <div class="mb-5">
            <div class="rounded-full bg-blue-500 px-2 py-1 w-[6rem] text-center inline-block text-slate-50">Facebook</div>
            <div class="rounded-full bg-violet-500 px-2 py-1 w-[6rem] text-center inline-block text-slate-50">Instagram</div>
            <div class="rounded-full bg-black px-2 py-1 w-[6rem] text-center inline-block text-slate-50">Tiktok</div>
            <div class="rounded-full bg-red-500 px-2 py-1 w-[6rem] text-center inline-block text-slate-50">Youtube</button>
            </div>
        </div>
</section>

<?php
include '../view/footer.php';
?>
<script>
    
    let btn = document.getElementById('copy-btn');
    
    const copyContent = async () => {
        try {

            let text = document.getElementById('shorten_url').value;
            await navigator.clipboard.writeText(text);
            console.log('Content copied to clipboard');

            document.getElementById("copy-btn").innerHTML = "Copied";

            //change color of button
            document.getElementById("copy-btn").classList.remove('bg-blue-500');
            document.getElementById("copy-btn").classList.add('bg-green-600');

            //change icon of button
            document.getElementsByClassName("fa-clipboard-list").remove();

        } catch (err) {
            console.error('Failed to copy: ', err);
        }
    }

    btn.addEventListener("click", copyContent, false);

</script>