<x-app-layout>
    <style>
        input, textarea{
            color: black;
        }

        #button{
            background-color: grey;
            border-radius: 5px;
            padding: 5px 10px;
        }

        #title, #content, #image_path{
            color: black;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{("Hello Admin! Add a new post here!")}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 dark:text-gray-100">
                    Add new post:
                    <form method="POST" action="{{route ('posts.store')}}">
                        @csrf
                        <label for="title" class="block  text-sm font-bold mb-2">Title:</label>
                        <input type="text" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="title" placeholder="Enter title" value="{{old('title')}}" required>
                        <label for="content" class="block text-sm font-bold mb-2">content:</label>
                        <textarea type="text" name="content" class="shadow appearance-none border border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="content" placeholder="Enter content" value="{{old('content')}}" required></textarea>
                        <label for="image_path" class="block text-sm font-bold mb-2">URL of th image:</label>
                        <input type="text" name="image_path" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="image_path" placeholder="Enter th URL of the image" value="{{old('image_path')}}" required>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Create post
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>