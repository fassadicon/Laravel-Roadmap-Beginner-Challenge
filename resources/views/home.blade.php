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
                    {{ $article->title }}
                </div>
                <div class="pt-0 pb-6 pr-6 pl-6 text-gray-900 dark:text-gray-100">
                    {{ $article->full_text }}
                </div>
                <div class="pt-0 pb-6 pr-6 pl-6 text-gray-900 dark:text-gray-100">
                    {{ $article->category->name }}
                </div>

                {{-- <div class="flex flex-wrap">
                    @foreach ($article->tags as $tag)
                        <span
                            class="mr-3 text-sm font-medium uppercase">#{{ $tag->name }}</span>
                    @endforeach
                </div> --}}
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
