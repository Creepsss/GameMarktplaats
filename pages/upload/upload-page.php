<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="../../dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-color-1">
    <header>
        <?php include '../../includes/navbar/navbar.php' ?>
    </header>
    <div class="flex w-full h-full justify-center italic">
        <div class="flex flex-wrap min-h-full w-11/12 p-5 m-5 bg-color-2 drop-shadow-1">
            <form action="pages/upload/upload-page.php">
                <div>
                    <label for="gname" class="text-white">Game name:</label>
                    <input type="text" id="gname" name="gname" required minlength="2" maxlength="8" size="10"></input><br>
                </div>
                <div>
                    <label for="description" class="text-white">Image:</label><br>
                    <input class="text-white" type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"></input>
                </div>
                <div>
                    <label for="description" class="text-white">description:</label>
                    <input type="text" id="description" name="description" required minlength="1" maxlength="200" size="100"></input><br>
                </div>
                <div class="flex grid-rows-3">
                    <div class="group/dropdown w-1/3 h-1/3 m-3">
                        <button class="pt-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div class="hidden group-hover/dropdown:grid items-center grid-cols-3 gap-x-32 gap-y-8 pb-4">
                            <a class="bg-zinc-600 w-32 h-8 text-white">
                                <input type="radio" id="action" name="tag" value="action" checked>
                                <label for="action">Action</label>
                            </a>
                            <a class="bg-zinc-600 w-32 h-8 text-white">
                                <input type="radio" id="adventure" name="tag" value="adventure">
                                <label for="adventure">adventure</label>
                            </a>
                            <a class="bg-zinc-600 w-32 h-8 text-white">
                                <input type="radio" id="shooter" name="tag" value="shooter">
                                <label for="shooter">shooter</label>
                            </a>
                        </div>
                    </div>
                    <a class=" w-1/3 h-1/3 m-3 text-white">  
                        <label for="price">price (1-1000):</label>
                        <input type="number" id="price" name="price" min="1" max="1000">
                    </a>
                    <a class=" w-1/3 h-1/3 m-3 text-white" href="">  
                        <input type="submit" value="Submit">
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>