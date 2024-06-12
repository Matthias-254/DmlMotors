<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($posts as $post)
                        <div>
                            // hier komt de image
                        </div>
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->content}}</p>
                        <p>Gepost op {{$post->created_at->format('d/m/y \o\m H:i')}}</p>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>