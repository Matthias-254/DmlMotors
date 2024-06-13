<x-app-layout>
    <style>
        #deel{
            margin-top: 20px;
        }
        h1{
            font-size: 1.5rem;
        }
        #boven{
            margin-top:10px;
        }
        #onder{
            font-size: 0.8rem;
            margin-bottom: 10px;
            background-color: red;
            color: white;
            padding: 2px 5px;
            border-radius: 5px;
        }
        #onder:hover{
            cursor: pointer;
        }
        #form{
            float: right;
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{("You're logged in admin!")}}
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
                    <hr>
                    @foreach ($contact as $contacts)
                        <p id="boven">Message: {{ $contacts->message }}</p>
                        <p>From: {{ $contacts->user->email }}</p>
                        @if(Auth::user()->usertype === 'admin')
                        <form method="POST" action="{{route('contact.destroy', $contacts->id)}}" id="form">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Support handled (delete)" id="onder" onclick="return confirm('delete support message?');">
                        </form>
                        @endif
                        <br><br><hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>