<div>

    @if(!$createForm)
    <button wire:click="toggleForm" type="button" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
        Add new user
    </button>

    @endif

    <div class="mt-2">
        @include('partials.flash-message')

    </div>
    @if($createForm)
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8 bg-white">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Create new user
        </h1>
        @include('partials.form-error')
        <form class="space-y-4 md:space-y-6" wire:submit.prevent="save">
            <div>
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fullname</label>
                <input type="text" wire:model="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex. Juan dela Cruz">
            </div>
            <div>
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Id</label>
                <input type="text" wire:model="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex. JuandelaCruz_123">
            </div>

            <div>
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>

                <div class="flex items-center mb-4">
                    <input checked id="default-radio-1" wire:model="gender" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                </div>
                <div class="flex items-center">
                    <input id="default-radio-2" wire:model="gender" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                </div>

            </div>

            <div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5  text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Save
                </button>
                <button wire:click="toggleForm" type="button" class="inline-flex items-center px-5 py-2.5  text-sm font-medium text-center text-white bg-gray-400 rounded-lg focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-500 hover:bg-gray-500">
                    Cancel
                </button>
            </div>


        </form>
    </div>
    @else
    <div>
        <div class="mb-2 w-50">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Search</label>
            <input type="text" wire:model.live.debounce500ms="search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex. Juan dela Cruz">
        </div>

        <div wire:loading>

            <p>Loading...</p>

        </div>

        <div class="grid md:grid-cols-3 gap-4 bg-gray-100 p-3">

            @foreach($users as $user)

            <div class="bg-white w-100" wire:key="{{ $user->id }}">

                <div class="flex flex-col items-center pb-10">
                    <span class="avatar  mt-5">{{ $user->fullname[0] }} </span>
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $user->fullname}}</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->role == 1 ? 'Teacher' : 'Student'}}</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Archive</a>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>



    @endif

</div>