<x-app-layout>
    <style>
        #post-del{
            border-radius: 5px;
            background-color: red;
            padding: 2px 5px;
            float: right;
        }

        #post-edit{
            border-radius: 5px;
            background-color: #4caf50;
            padding: 2px 5px;
        }

        #post-del:hover{
            cursor: pointer;
        }
        img{
            width: 50%;
            height: auto;
            margin: 0 auto;
        }
        h3{
            margin-top: 20px;
            font-size: 1.8rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }
        #content{
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
        #date{
            font-size: 0.9rem;
            margin-bottom: 10px;
            color: gray;
        }
        #groen{
            color: #4caf50;
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <p>Welcome on the <span id="groen">news </span>page!</p>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($posts as $post)
                        <img src="{{ URL($post->image_path) }}" alt="News logo">
                        <h3>{{$post->title}}</h3>
                        <p id="content">{{$post->content}}</p>
                        <p id="date">Gepost op {{$post->created_at->format('d/m/y \o\m H:i')}}</p>
                        @if(Auth::user()->usertype === 'admin')
                        <a href="{{ route('posts.edit', $post->id) }}" id="post-edit">Edit Post</a>
                        <form method="POST" action="{{route('posts.destroy', $post->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete Post" id="post-del" onclick="return confirm('delete post?');">
                            <br>
                        </form>
                        @endif
                        <br><hr><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>