<x-app-layout>

    <style>
        #text-in-menu {
            font-size: 1.3rem;
            text-align: center;
        }

        h2{
            text-align: center;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("You're logged in!") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" id="text-in-menu">
                    {{ __("Welcome to the website of DML motors. Feel free to use the navigation bar at the top to see what else this website has to offer.") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
