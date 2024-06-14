<x-app-layout>
    <style>
        #h1{
            font-size: 2rem;
            font-weight: bold;
        }
        .span{
            font-weight: bold;
            color: whitesmoke;
            margin-left: 10px
        }
        h1{
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            text-decoration: underline;
            margin-bottom: 40px;
        }
        .groen{
            color: #4caf50;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Welcome on the <span class="groen">Users List</span>! Here you can see all the users that are registered on the website.
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>All <span class="groen">Users</span> in <span class="groen">alphabetical</span> order:</h1>
                    @foreach ($users as $user)
                        <span class="span">name: </span>{{$user->name}}<br>
                        <span class="span">Birthday: </span> {{$user->birthday}}<br>
                        <span class="span">About me: </span> {{$user->aboutme}}<br>
                        <br>
                        <hr>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>