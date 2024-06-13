<x-app-layout>
    <style>
        #post-del{
            color: red;
            float: right;
        }

        #post-edit{
            color: yellowgreen;
        }

        #post-del:hover{
            cursor: pointer;
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{("Welcome on the news page!")}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($posts as $post)
                        <img src="{{ URL($post->image_path) }}" alt="News logo">
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->content}}</p>
                        <p>Gepost op {{$post->created_at->format('d/m/y \o\m H:i')}}</p>
                        @if(Auth::user()->usertype === 'admin')
                        <a href="{{ route('posts.edit', $post->id) }}" id="post-edit">Edit POST</a>
                        <form method="POST" action="{{route('posts.destroy', $post->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete Post" id="post-del" onclick="return confirm('delete post?');">
                        </form>
                        @endif
                        <br><hr><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>