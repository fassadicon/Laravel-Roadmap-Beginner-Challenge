<x-app-layout>
    <div class="p-6 text-xl text-gray-800 font-semibold dark:text-gray-100">
        <div class="w-full">
            <form class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4"
                action="{{ route('admin.articles.update', $article) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Title
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="title" type="text" name="title" value="{{ old('title', $article->title) }}">
                </div>
                <div class="mb-4">
                    <label class="block text-slate-50 text-sm font-bold mb-2" for="full_text">
                        Content
                    </label>
                    <textarea id="full_text" name="full_text" rows="5"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('full_text', $article->full_text) }}</textarea>
                    @error('full_text')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Image
                    </label>

                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file">

                </div> --}}
                <div class="mb-4">
                    <label class="block text-slate-50 text-sm font-bold mb-2" for="category">
                        Category
                    </label>
                    @foreach ($categories as $category)
                        <div class="flex items-center mb-1">
                            <input type="radio"
                                value="{{ \Illuminate\Support\Facades\Crypt::encryptString($category->id) }}"
                                name="category" {{ $article->category->name == $category->name ? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $category->name }}</label>
                        </div>
                    @endforeach
                    @error('category')
                        <div class="alert alert-danger text-red-400">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="tags">
                        Tags
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="tags" type="text" name="tags"
                        value="{{ old('tags', $article->tags()->implode('name', ', ')) }}">
                    @error('tags')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <input type="submit" value="Update"
                        class="bg-lime-700 hover:bg-lime-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" />
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
