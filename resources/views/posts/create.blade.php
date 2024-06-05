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

        form{
            text-align: center;  
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
                    <form method="POST" action="{{route('posts.store')}}">
                        @csrf
                        <label for="title">Title</label><br>
                        <input type="text" id="title" name="title" value="{{old('title')}}" required><br><br>
                        <label for="content">Content</label><br>
                        <textarea name="content" id="content" cols="30" rows="10" value="{{old('content')}}" required></textarea><br><br>
                        <label for="image">Image</label><br>
                        <input type="file" id="image" name="image" required><br><br>
                        <button type="submit" id="button">
                            Add post
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>