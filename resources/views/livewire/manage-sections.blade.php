 <div class="p-6 space-y-4 md:space-y-6 sm:p-8">


     <div class="flex justify-between items-center">
         <h1 class="font-bold">Section management {{ $createForm ? '/ create':''}}</h1>
         @if(!$createForm)
         <button wire:click="toggleCreateForm" type="button" class="w-auto text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Add new Section</button>
         @endif
     </div>
     @include('partials.flash-message')

     @if($createForm)
     <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

         @include('partials.form-error')
         <form class="space-y-4 md:space-y-6" wire:submit.prevent="save">
             <div>
                 <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section name</label>
                 <input type="text" wire:model="sectionName" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex. Binifacio3">
             </div>
             <div>
                 <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section id <span class="text-xs text-green-600">(auto)</span></label>
                 <input type="text" value="{{ $sectionId }}" class="uppercase bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
             </div>


             <div>
                 <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grade level</label>
                 <select wire:model="level" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     <option selected>Choose one</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                 </select>
             </div>


             <div>
                 <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">School Year</label>
                 <select wire:model="schoolYear" id="combo-sy" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     <option selected>Choose one</option>
                     @foreach($years as $year)
                     <option value="{{$year}}">{{$year}}</option>
                     @endforeach
                 </select>
             </div>


             <div wire:loading.remove>
                 <button type="submit" class="w-auto text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save</button>
                 <button type="button" wire:click="toggleCreateForm" class="w-auto text-white bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Cancel</button>

             </div>
             <div wire:loading>
                 <div role="status">
                     <svg aria-hidden="true" class="w-8 h-8 mr-2 text-primary-200 animate-spin dark:text-primary-600 fill-primary-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                         <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                     </svg>
                     <span class="sr-only">Loading...</span>
                 </div>
             </div>
         </form>
     </div>

     @elseif($editForm)
     <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

         @include('partials.form-error')
         <span class="bg-gray-100 text-gray-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
             {{ $sectionName }}
         </span>
         <form class="space-y-4 md:space-y-6" wire:submit.prevent="save">
             <div>
                 <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section name</label>
                 <input type="text" wire:model="sectionName" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex. Binifacio3">
             </div>
             <div>
                 <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section id <span class="text-xs text-green-600">(auto)</span></label>
                 <input type="text" wire:model="sectionId" class="uppercase bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
             </div>


             <div>
                 <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grade level</label>
                 <select wire:model="level" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                 </select>
             </div>


             <div>
                 <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">School Year</label>
                 <select wire:model="schoolYear" id="combo-sy" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     @foreach($years as $year)
                     <option value="{{$year}}">{{$year}}</option>
                     @endforeach
                 </select>
             </div>


             <div wire:loading.remove>
                 <button type="submit" class="w-auto text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save</button>
                 <button type="button" wire:click="closeEditForm" class="w-auto text-white bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Cancel</button>

             </div>
             <div wire:loading>
                 <div role="status">
                     <svg aria-hidden="true" class="w-8 h-8 mr-2 text-primary-200 animate-spin dark:text-primary-600 fill-primary-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                         <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                     </svg>
                     <span class="sr-only">Loading...</span>
                 </div>
             </div>
         </form>
     </div>
     @else
     <!-- default here -->
     <div>
         <div class="mb-2">
             <label for="text" class="w-auto mb-2 text-sm font-medium text-gray-900 dark:text-white">Search</label>
             <input type="text" wire:model.live.debounce500ms="search" class="w-auto bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ex. Binifacio3">
         </div>

         <div class="grid lg:grid-cols-2 gap-4">

             <!-- section card -->
             @foreach($sections as $section)
             <div class="flex rounded-lg border-2 bg-white hover:bg-gray-200 cursor-pointer flex-col p-7 w-100">
                 <div class="text-2xl text-gray-700 font-bold truncate uppercase">{{ $section->section_name }}</div>
                 <div class="text-gray-600 text-xm">
                     Grade {{ $section->level }} - A.Y {{ $section->school_year }}
                 </div>

                 <div>
                     <div class="inline-flex rounded-md shadow-sm" role="group">
                         @if($section->status == 1)
                         <button wire:click="toggleArchive('{{$section->id}}','$section->status')" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-purple-700 focus:z-10 focus:ring-2 focus:ring-purple-700 focus:text-purple-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                             <span class="mdi mdi-archive"></span>
                             Archive
                         </button>

                         @else
                         <button wire:click="toggleArchive('{{$section->id}}','{{$section->status}}')" type="button" class="inline-flex items-center px-4 py-2 text-sm bg-red-500 font-medium text-white border border-gray-200 rounded-l-lg hover:bg-red-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-red-700 focus:text-white dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                             <span class="mdi mdi-archive"></span>
                             Unarchive
                         </button>
                         @endif
                         <button wire:click="toggleEditForm('{{$section->id}}')" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-purple-700 focus:z-10 focus:ring-2 focus:ring-purple-700 focus:text-purple-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                             <span class="mdi mdi-file-edit-outline"></span>
                             Edit
                         </button>
                         <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-purple-700 focus:z-10 focus:ring-2 focus:ring-purple-700 focus:text-purple-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">

                             <span class="mdi mdi-information-outline"></span>
                             Details
                         </button>
                     </div>
                 </div>
             </div>
             @endforeach
             <!-- end card -->

         </div>

         {{ $sections->links() }}
     </div>

     @endif
 </div>