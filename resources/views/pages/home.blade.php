<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class=" text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Articles
        </h2>
    </x-slot> --}}
    @foreach ($articles as $article)
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-xl text-gray-800 font-semibold dark:text-gray-100">
                        <a href="{{ route('show', [$article]) }}" >
                            {{ $article->title }}
                        </a>
                    </div>
                    <div class="pt-0 pb-6 pr-6 pl-6 text-gray-900 dark:text-gray-100">
                        {{ $article->full_text }}
                    </div>
                    <div class="pt-0 pb-6 pr-6 pl-6 text-gray-900 dark:text-gray-100">
                        {{ $article->category->name }}
                    </div>

                    <div class="flex flex-wrap">
                        @foreach ($article->tags as $tag)
                            {{-- <span class="mr-3 text-sm font-medium uppercase">{{ $tag->name }}</span> --}}
                            <span
                                class="ml-5 my-3 flex flex-wrap justify-between items-center text-xs sm:text-sm bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 rounded px-4 py-2 font-bold leading-loose cursor-pointer dark:text-gray-300">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
