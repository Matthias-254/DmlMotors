<x-app-layout>
    <style>
        #deel{
            margin-top: 20px;
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{("You're logged in!")}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome to the admin Panel! Here you can see info about the website:") }}
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" id="deel">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Alle contact verzoeken:</h1>
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>