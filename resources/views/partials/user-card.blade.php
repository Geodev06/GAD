<div class="border-2 border-primary rounded-2xl flex bg-white p-6 flex-col space-y-5">
    <div class="flex justify-between w-64">
        <span class="avatar">A</span>
        <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownDotsHorizontal" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
            </ul>
            <div class="py-2">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated link</a>
            </div>
        </div>
    </div>
    <div>
        <p class="text-lg font-semibold">John Doe</p>
        <p class="text-gray-400 text-xs">USA</p>
    </div>
    <div class="flex space-x-10 text-gray-400">
        <div>
            <p class="text-red-400 font-bold">10.9K</p>
            <p class="text-xs">Followers</p>
        </div>
        <div>
            <p class="text-green-500 font-bold">468</p>
            <p class="text-xs">Following</p>
        </div>
        <div>
            <p class="text-blue-400 font-bold">15.1K</p>
            <p class="text-xs">Tweets</p>
        </div>
    </div>
    <div class="flex space-x-5 items-center">
        <button class="rounded-lg bg-red-400 text-red-50 text-sm p-2 px-6 transform hover:scale-105 duration-300">
            Follow
        </button>
        <svg xmlns="http://www.w3.org/2000/svg" class="transform hover:scale-110 cursor-pointer duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1"></path>
            <line x1="12" y1="12" x2="12" y2="12.01"></line>
            <line x1="8" y1="12" x2="8" y2="12.01"></line>
            <line x1="16" y1="12" x2="16" y2="12.01"></line>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="transform hover:scale-110 cursor-pointer duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="transform hover:scale-110 cursor-pointer duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
            <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
        </svg>
    </div>
</div>