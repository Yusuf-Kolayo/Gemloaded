<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-flex ">
            {{ __('Music Home') }}
        </h2>
    </x-slot>
    
    <x-slot name="page_action"> 
        <a href="{{ route('artiste.create') }}" class="inline-flex float-right py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Add New Artiste
        </a> 

    
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   loop out artists here ...
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
