 <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
     <div class="flex justify-between items-center">
         <h1 class="font-bold">Student management {{ $createForm ? '/ create':''}}</h1>
         @if(!$createForm)
         <button wire:click="showCreateForm" type="button" class="w-auto text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Add new Student</button>

         @endif
     </div>

     @if($createForm)
     <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

         @include('partials.form-error')
         <form class="space-y-4 md:space-y-6" wire:submit.prevent="save">
             <div>
                 <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fullname</label>
                 <input type="text" wire:model="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex. Juan dela Cruz">
             </div>
             <div>
                 <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Id or Student Id</label>
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

         </form>
     </div>
     @else

     @include('partials.flash-message')
     @include('partials.form-error')

     <div class="grid md:grid-cols-3 gap-4">

         @include('partials.user-card')

     </div>

     @endif

 </div>