<x-app-layout>
    <div class="p-6 text-xl text-gray-800 font-semibold dark:text-gray-100">
        <div class="w-full">
            <form class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8" action="{{ route('admin.articles.store') }}"
                method="post">
                @csrf
                <div class="mb-6">
                    <label class="block text-slate-50 text-sm font-bold mb-2" for="title">
                        Title
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="title" type="text" name="title"
                        placeholder="Example: A day in my life as a Web Developer" value="test_description">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-slate-50 text-sm font-bold mb-2" for="full_text">
                        Content
                    </label>
                    <textarea id="full_text" name="full_text" rows="5"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Example: Hello Universe! I am Gary, a full stack Developer with 4 years of experience. Today, I will give you an overview on how my daily routine looks like...">test_description</textarea>
                    @error('full_text')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="mb-4">
                    <label class="block text-slate-50 text-sm font-bold mb-2" for="image">
                        Image
                    </label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="image" type="file">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
                <div class="mb-4">
                    <label class="block text-slate-50 text-sm font-bold mb-2" for="category">
                        Category
                    </label>
                    @foreach ($categories as $category)
                        <div class="flex items-center mb-1">
                            <input type="radio"
                                value="{{ \Illuminate\Support\Facades\Crypt::encryptString($category->id) }}"
                                name="category"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $category->name }}</label>
                        </div>
                    @endforeach
                    @error('category')
                        <div class="alert alert-danger text-red-400">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-slate-50 text-sm font-bold mb-2" for="tags">
                        Tags
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="tags" name="tags" type="text"
                        placeholder="Example: PHP, Laravel, CodeIgniter, JavaScript, HTML, CSS, Tailwind, Bootstrap"
                        value="PHP, Laravel">
                    @error('tags.*')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <input
                        class="bg-lime-700 hover:bg-lime-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit" value="Create">
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
