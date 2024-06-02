<x-app-layout>

    <style>
        #text-in-menu {
            font-size: 1.3rem;
            text-align: center;
        }

        h2{
            text-align: center;
            animation: glow 3s infinite;
        }

        .green-text {
            color: #4caf50;
        }

        @keyframes glow {
        0%,100% {
            text-shadow: none;
            color: grey;
        }
        25%,50% {  
            color: #4caf50;
        }
    }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            You're logged in!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" id="text-in-menu">
                    <p>Welcome to the website of <span class="green-text">DML motors</span>. Feel free to use the <span class="green-text">navigation bar</span> at the top to see what else this website has to offer.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
