   <section class="bg-gray-50 dark:bg-gray-900">
       <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
           <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
               <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
               Flowbite
           </a>
           <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
               <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                   <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                       Create and account
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
                       <hr>

                       <div>
                           <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                           <input type="password" wire:model="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                       </div>
                       <div>
                           <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                           <input type="password" wire:model="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                       </div>
                       <div class="flex items-start">
                           <div class="flex items-center h-5">
                               <input id="terms" aria-describedby="terms" wire:model.live="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                           </div>
                           <div class="ml-3 text-sm">
                               <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                           </div>

                       </div>
                       @if(!$terms)
                       @else
                       <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                       @endif

                   </form>
               </div>
           </div>
       </div>
   </section>