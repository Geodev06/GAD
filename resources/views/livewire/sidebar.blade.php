<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">

    <div class=" bg-gray-100 py-6 flex flex-col justify-center ">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <!-- Widget start -->
            <div class="rounded-3xl flex bg-white p-7 justify-between flex-col space-y-6 sm:space-y-0 items-center sm:items-stretch sm:flex-row" id="widget">
                <div class="flex flex-col space-x-0 items-center">
                    <span class="avatar">{{Auth::user()->fullname[0]}}</span>
                    <p class="font-semibold mb-2">{{Auth::user()->gender == 0 ? 'Mr. ': 'Ms. '}} {{Auth::user()->fullname}}</p>
                    @if(Auth::user()->role == 0 )
                    <span class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-purple-900 dark:text-purple-300">Administrator</span>
                    @else
                    <span class="bg-pink-100 text-pink-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-pink-900 dark:text-pink-300">Teacher</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/dashboard" wire:navigate class="{{ request()->is('dashboard') ? 'text-purple-900' : 'text-gray-900' }} flex items-center p-2  rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="mdi mdi-view-dashboard text-xl"></span>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button" class=" {{ request()->is('manage-users') ? 'text-purple-900' : 'text-gray-900' }} flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <span class="mdi mdi-database-edit text-xl"></span>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap"> Data management</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    @if(Auth::user()->role == 0)
                    <li>
                        <a href="/manage-users" wire:navigate class="{{ request()->is('manage-users') ? 'text-purple-900' : 'text-gray-900' }} flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <span class="mdi mdi-account-group mr-2 text-xl"></span>
                            Manage Users</a>
                    </li>

                    @endif
                    @if(Auth::user()->role == 1)
                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Students</a>
                    </li>

                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Learning Materials</a>
                    </li>

                    <li>
                        <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Questionnaires</a>
                    </li>
                    @endif

                </ul>
            </li>

            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="mdi mdi-logout text-xl"></span>
                    <span class="flex-1 ml-3 whitespace-nowrap" wire:click="signout">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
</aside>