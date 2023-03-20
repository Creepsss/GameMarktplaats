<nav class="flex bg-zinc-700 text-zinc-300 text-center justify-between pt-4 pl-4 pr-4 sticky top-0">
    <div>
        <p>Logo</p>
    </div>
    <div class="border-white">
        <form>
            <input type="text" placeholder="Search" class="border-2 rounded-full w-96 py-2 border-stone-200 px-5 text-white bg-zinc-700 focus:border-stone-400 outline-none">
        </form>
        <div class="group/dropdown">
            <button class="pt-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div class="hidden group-hover/dropdown:grid items-center grid-cols-3 gap-x-32 gap-y-8 pb-4">
                <a class="bg-zinc-600 w-32 h-8 text-white" href="#">Action</a>
                <a class="bg-zinc-600 w-32 h-8 text-white" href="##">Adventure</a>
                <a class="bg-zinc-600 w-32 h-8 text-white" href="###">Shooter</a>
                <a class="bg-zinc-600 w-32 h-8 text-white" href="#">Action</a>
                <a class="bg-zinc-600 w-32 h-8 text-white" href="##">Adventure</a>
                <a class="bg-zinc-600 w-32 h-8 text-white" href="###">Shooter</a>
                <a class="bg-zinc-600 w-32 h-8 text-white" href="#">Action</a>
                <a class="bg-zinc-600 w-32 h-8 text-white" href="##">Adventure</a>
                <a class="bg-zinc-600 w-32 h-8 text-white" href="###">Shooter</a>
                <a class="bg-zinc-600 w-32 h-8 text-white" href="#">Action</a>
                <a class="bg-zinc-600 w-32 h-8 text-white" href="##">Adventure</a>
                <a class="bg-zinc-600 w-32 h-8 text-white" href="###">Shooter</a>
            </div>
        </div>
    </div>
    <div class="group/account">
        <p class="border-2 rounded-full p-2 border-zinc-800 max-w-fit">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
        </p>

        <div class="hidden group-hover/account:grid absolute right-0 bg-zinc-700 w-32 border-2 border-zinc-800 rounded-lg">
            <a class="#" href="#">Profile</a>
            <a class="#" href="##">Listings</a>
            <a class="#" href="###">Login</a>
            <a class="#" href="####">Logout</a>
        </div>

    </div>
</nav>