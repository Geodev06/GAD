<div>

    @if(!$createForm)
    <button wire:click="toggleCreateForm" type="button" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
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
                <button wire:click="toggleCreateForm" type="button" class="inline-flex items-center px-5 py-2.5  text-sm font-medium text-center text-white bg-gray-400 rounded-lg focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-500 hover:bg-gray-500">
                    Cancel
                </button>
            </div>


        </form>
    </div>

    @elseif($editForm)

    <div class="p-6 space-y-4 md:space-y-6 sm:p-8 bg-white">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Edit {{ $editFullname }}
        </h1>
        @include('partials.form-error')
        <form class="space-y-4 md:space-y-6" wire:submit.prevent="save">
            <div>
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fullname</label>
                <input type="text" wire:model="editFullname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex. Juan dela Cruz">
            </div>

            <div>
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>

                <div class="flex items-center mb-4">
                    <input checked id="default-radio-1" wire:model="editGender" type="radio" value="0" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                </div>
                <div class="flex items-center">
                    <input id="default-radio-2" wire:model="editGender" type="radio" value="1" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                </div>

            </div>

            <div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5  text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Save
                </button>


                <button wire:click="toggleStatus" type="button" class="inline-flex items-center px-5 py-2.5  text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Toggle Status
                </button>


                <button wire:click="closeEditForm" type="button" class="inline-flex items-center px-5 py-2.5  text-sm font-medium text-center text-white bg-gray-400 rounded-lg focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-500 hover:bg-gray-500">
                    Cancel
                </button>
            </div>


        </form>
    </div>
    @else


    <!-- main menu -->
    <div>
        <div class="mb-2 w-50">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Search</label>
            <input type="text" wire:model.live.debounce500ms="search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex. Juan dela Cruz">
        </div>

        <div wire:loading>

            <p>Loading...</p>

        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Position
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <span class="avatar uppercase bg-red-500">{{ $user->fullname[0]}}</span>
                        <div class="pl-3">
                            <div class=" font-semibold capitalize">{{$user->gender == '0' ? 'Mr. ':'Ms. '}} {{ $user->fullname}}</div>
                            <div class="font-bold text-gray-500 text-xs uppercase">{{ $user->user_id }}</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        @if($user->role == 1)
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-purple-900 dark:text-purple-300">Teacher</span>

                        @else
                        <span class="bg-purple-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Teacher</span>


                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            @if($user->status == 1)
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Active

                            @else
                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> Inactive

                            @endif
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <button wire:click="toggleFormEdit('{{$user->id}}')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {{ $users->links()}}

    </div>
    <!-- end main -->


    @endif

</div>