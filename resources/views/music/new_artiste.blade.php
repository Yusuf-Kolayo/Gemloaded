<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creating New Artiste') }}
        </h2>
    </x-slot>
    
    

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white border-b border-gray-200">
                
                 

                    {!! Form::open(['route' => ['artiste.store'], 'method' =>'POST', 'files' => true]) !!}
                  
                          <div class="px-2 py-3 bg-white sm:p-3">
                            <div class="grid grid-cols-6 gap-6">
                              <div class="col-span-6 sm:col-span-3">
                                <label for="full_name" class="block text-sm font-medium text-gray-700">Full name</label>
                                <input type="text" name="full_name" id="full_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                              </div> 
              
                              <div class="col-span-6 sm:col-span-3">
                                <label for="stage_name" class="block text-sm font-medium text-gray-700">Stage Name</label>
                                <input type="text" name="stage_name" id="stage_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                              </div>
                
                              <div class="col-span-6">
                                <label for="dp" class="block text-sm font-medium text-gray-700">Display Picture</label>
                                <input type="file" name="dp" id="dp" class="mt-1 file-input focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                              </div>
              
                              <div class="col-span-6">
                                <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                                <textarea name="bio" id="bio" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                              </div>

                            </div>
                          </div>
                          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                              Save
                            </button>
                          </div>
                    
                          {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>