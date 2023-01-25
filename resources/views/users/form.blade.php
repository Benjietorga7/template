<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                <h2 class="float-left">
                    {{ $header }}
                </h2>

                <button class="float-right rounded-full bg-indigo-800 p-1 hover:bg-sky-700 ">Add User
                </button>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
