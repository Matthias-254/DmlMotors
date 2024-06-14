<x-app-layout>
    <style>
        #message{
            color: black;
        }
        .groen{
            color: #4caf50;
        }
        h1{
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
        }
        .label{
            font-size: 1.5rem;
            font-weight: bold;
        }
        #message{
            color: black;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        #knop{
            border-radius: 5px;
            background-color: #4caf50;
            padding: 5px 10px;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Welcome on the <span class="groen">contact</span> page! Feel free to send us <span class="groen">a message</span>!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1><span class="groen">Contact</span> us:</h1>
                    <br>
                    <form method="POST" action="{{route ('contact.store')}}">
                        @csrf
                        <label for="message" class="block text-sm font-bold mb-2"><span class="label">Message:</span></label>
                        <textarea type="text" name="message" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Enter your message..." required>{{old('message')}}</textarea>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" id="knop">
                            Send message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>