<x-app-layout>
    <x-slot name="header">
        <h2 class=" text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $category->name }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2>Articles in this category:</h2>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @forelse ($category->articles()->get() as $article)
                    <div class="pt-5 pb-6 pr-6 pl-6 text-gray-900 dark:text-gray-100">
                        {{ $article->title }}
                    </div>
                @empty
                    <h2>No Articles in this Category</h2>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
