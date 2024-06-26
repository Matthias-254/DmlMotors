<x-app-layout>
    <style>
        #cat{
            font-size: 1.8rem;
            font-weight: bold;
            text-align: center;
            color:#4caf50;
        }

        #faq-del{
            border-radius: 5px;
            background-color: red;
            padding: 2px 5px;
            float: right;
        }

        #faq-edit{
            border-radius: 5px;
            background-color: #4caf50;
            padding: 2px 5px;
        }

        #faq-del:hover{
            cursor: pointer;
        }

        .groen{
            color: #4caf50;
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Welcome on the <span class="groen">FAQ</span> page! The FAQs are ordered by <span class="groen">category.</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($faqs as $category => $categoryFaqs)
                        <h1 id="cat">{{ $category }}:</h1>
                        <hr>
                        <br>
                        @foreach ($categoryFaqs as $faq)
                            <p class="text-lg text-gray-600 dark:text-gray-300">
                                Q: {{ $faq->question }} <br>
                                A: {{ $faq->answer }}
                            </p>
                            @if(Auth::user()->usertype === 'admin')
                            <a href="{{ route('faq.edit', $faq->id) }}" id="faq-edit">Edit FAQ</a>
                            <form method="POST" action="{{route('faq.destroy', $faq->id)}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete faq" id="faq-del" onclick="return confirm('delete faq?');">
                                <br>
                            </form>
                            @endif
                            <br><hr><br>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>