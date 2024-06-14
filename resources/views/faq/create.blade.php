<x-app-layout>
    <style>
        input{
            color: black;
            margin-top: 10px;
            margin-bottom: 20px;
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

        .groen{
            color: #4caf50;
        }

        #knop{
            border-radius: 5px;
            background-color: #4caf50;
            padding: 5px 10px;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Hello Admin! Add a <span class="groen">new FAQ</span> here!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Add a <span class="groen">new FAQ:</span></h1>
                    <br>
                    <form method="POST" action="{{route ('faq.store')}}">
                        @csrf
                        <label for="category" class="block  text-sm font-bold mb-2"><span class="label">Category:</span></label>
                        <input type="text" name="category" class="shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline" id="category" placeholder="Enter category" value="{{old('category')}}" required>
                        <label for="question" class="block  text-sm font-bold mb-2"><span class="label">Question:</span></label>
                        <input type="text" name="question" class="shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline" id="question" placeholder="Enter question" value="{{old('question')}}" required>
                        <label for="answer" class="block  text-sm font-bold mb-2"><span class="label">Answer:</span></label>
                        <input type="text" name="answer" class="shadow appearance-none border border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="answer" placeholder="Enter answer" value="{{old('answer')}}" required>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" id="knop">
                            Create FAQ
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>