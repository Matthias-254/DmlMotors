<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{("Welcome on the about page!")}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    This project is made by Matthias Lannoo. <br>
                    The code for this project is on my github: <a href="https://github.com/Matthias-254/DmlMotors">https://github.com/Matthias-254/DmlMotors</a><br>
                    The name of the database is "dmlmotors".<br>
                    For this project I have used some sources:<br> 
                    For the admin middleware I Used this video: <a href="https://www.youtube.com/watch?v=G3UeClZPR4k">https://www.youtube.com/watch?v=G3UeClZPR4k</a><br>
                    I also used the information that is available on the laravel website: <a href="https://laravel.com/docs/11.x/releases">https://laravel.com/docs/11.x/releases</a><br>
                    When I encountered some minor problems, my teacher sometimes helped me fix them.<br>
                    The last resource I use was the available material on canvas for this course.<br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>