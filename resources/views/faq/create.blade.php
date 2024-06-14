<x-app-layout>
    <style>
        input{
            color: black;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{("Here you can create a new FAQ!")}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Add new FAQ:
                    <form method="POST" action="{{route ('faq.store')}}">
                        @csrf
                        <label for="category" class="block  text-sm font-bold mb-2">Category:</label>
                        <input type="text" name="category" class="shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline" id="category" placeholder="Enter category" value="{{old('category')}}" required>
                        <label for="question" class="block  text-sm font-bold mb-2">Question:</label>
                        <input type="text" name="question" class="shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline" id="question" placeholder="Enter question" value="{{old('question')}}" required>
                        <label for="answer" class="block  text-sm font-bold mb-2">Answer:</label>
                        <input type="text" name="answer" class="shadow appearance-none border border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="answer" placeholder="Enter answer" value="{{old('answer')}}" required>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Create FAQ
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>