<x-app-layout>
    <style>
        #h1{
            font-size: 2rem;
            font-weight: bold;
        }
        .span{
            font-weight: bold;
            color: whitesmoke;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{("Welcome on the users list! Here you can see all the users that are registered on the website.")}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 id="h1">In alphabetical order:</h1>
                    <hr>
                    @foreach ($users as $user)
                        <span class="span">name: </span>{{$user->name}}<br>
                        <span class="span">Birthday: </span> {{$user->birthday}}<br>
                        <span class="span">About me: </span> {{$user->aboutme}}<br>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>