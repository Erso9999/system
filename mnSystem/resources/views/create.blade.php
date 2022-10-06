@extends('page')

@section('content')
 <div>User create</div>
 <!-- Modal toggle -->
<button class="block mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
    Insert user
 </button>
 
 <!-- Main modal -->
 <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
     <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
         <!-- Modal content -->
         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
             <!-- Modal header -->
             <form action="/user" method="POST" >
               @csrf
             <div class="items-start p-3 rounded-t">
               <label class="text-black ml-2 mb-2">Name:</label>
               <div class="relative w-full">
                   <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-4 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" name="name" required>
               </div>
             </div>
             <div class="items-start p-3 rounded-t">
               <label class="text-black ml-2 mb-2">Age:</label>
               <div class="relative w-full">
                   <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-4 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Age" name="age" required>
               </div>
             </div>
             
             <div class="items-start p-3 rounded-t">
                <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select city</label>
                <select id="city" name="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected>Choose a city</option>
                  <option value="Varna">Varna</option>
                  <option value="Sofia">Sofia</option>
                  <option value="Plovdiv">Plovdiv</option>
                  <option value="Burgas">Burgas</option>
                </select>
             </div>
             <div class="items-start p-3 rounded-t">
              <label class="text-black ml-2 mb-3">Choose type:</label>
              <div class="flex items-center mb-4">
                <input id="default-checkbox" type="checkbox" name="type[]" value="Experienced" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Experienced</label>
            </div>
            <div class="flex items-center">
                <input id="checked-checkbox" type="checkbox" name="type[]" value="No experience" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No experience</label>
            </div>
            </div>
             <!-- Modal footer -->
             <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                 <button data-modal-toggle="defaultModal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                 <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:outline-none  rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close</button>
             </div>
           </form>
         </div>
     </div>
 </div>
@endsection
