<x-app-layout>
    <style>
        .link{
            color: #0096FF;
            text-decoration: underline;
        }
        .groen{
            color: #4caf50;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Welcome on the <span class="groen">about</span> page!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    This project is made by <span class="groen">Matthias Lannoo.</span><br>
                    The code for this project is on my github: <a href="https://github.com/Matthias-254/DmlMotors" class="link">https://github.com/Matthias-254/DmlMotors</a><br>
                    The name of the database is "<span class="groen">dmlmotors</span>".<br>
                    For this project I have used <span class="groen">some sources:</span><br> 
                    <span class="groen">• </span>For the admin middleware I Used this video: <a href="https://www.youtube.com/watch?v=G3UeClZPR4k" class="link">https://www.youtube.com/watch?v=G3UeClZPR4k</a><br>
                    <span class="groen">• </span>I also used the information that is available on the laravel website: <a href="https://laravel.com/docs/11.x/releases" class="link">https://laravel.com/docs/11.x/releases</a><br>
                    <span class="groen">• </span>When I encountered some minor problems, my teacher sometimes helped me fix them.<br>
                    <span class="groen">• </span>The last resource I use was the available material on canvas for this course.<br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>