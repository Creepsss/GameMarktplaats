<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'includes/metatags.php'?>
    <link rel="stylesheet" href="./dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-color-1">
    <header>
        <?php include 'includes/navbar/navbar.php' ?>
    </header>
    <div class="flex w-full h-full justify-center italic">
        <div class="flex flex-wrap min-h-full w-11/12 p-5 m-5 bg-color-2 drop-shadow-1">
            <div class="bg-color-3 m-3 p-3 w-full drop-shadow-1">
                <p class="text-white text-4xl m-5 mb-7">Popular Games</p>
                <div class="flex grid-rows-4">
                    <a class=" w-1/4 h-1/4 m-3" href="">
                        <img src="./img/cs_go.jpg" alt="CS:GO" class="border border-zinc-500 w-full h-full">
                    </a>
                    <a class=" w-1/4 h-1/4 m-3" href="">
                        <img src="./img/cs_go.jpg" alt="CS:GO" class="border border-zinc-500 w-full h-full">
                    </a>
                    <a class=" w-1/4 h-1/4 m-3" href="">
                        <img src="./img/cs_go.jpg" alt="CS:GO" class="border border-zinc-500 w-full h-full">
                    </a>
                    <a class=" w-1/4 h-1/4 m-3" href="">
                        <img src="./img/cs_go.jpg" alt="CS:GO" class="border border-zinc-500 w-full h-full">
                    </a>
                </div>
            </div>
            <div class="bg-color-3 m-3 p-3 w-full drop-shadow-1 text-white">
                <p class="text-4xl m-5 mb-7">Popular Categories</p>
                <div class="flex grid-rows-4">
                    <a class="flex justify-center w-1/4 h-1/4 m-3 border border-zinc-500" href="">
                        <img src="./img/cs_go.jpg" alt="CS:GO" class="w-full h-full low-opacity-1">
                        <p class="absolute m-16 text-2xl cursor-pointer">Action</p>
                    </a>
                    <a class="flex justify-center w-1/4 h-1/4 m-3 border border-zinc-500" href="">
                        <img src="./img/cs_go.jpg" alt="CS:GO" class="w-full h-full low-opacity-1">
                        <p class="absolute m-16 text-2xl cursor-pointer">Adventure</p>
                    </a>
                    <a class="flex justify-center w-1/4 h-1/4 m-3 border border-zinc-500" href="">
                        <img src="./img/cs_go.jpg" alt="CS:GO" class="w-full h-full low-opacity-1">
                        <p class="absolute m-16 text-2xl cursor-pointer">Platformer</p>
                    </a>
                    <a class="flex justify-center w-1/4 h-1/4 m-3 border border-zinc-500" href="">
                        <img src="./img/cs_go.jpg" alt="CS:GO" class="w-full h-full low-opacity-1">
                        <p class="absolute m-16 text-2xl cursor-pointer">Battle Royale</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>