<x-app-layout>
    <div class="p-6 text-xl text-gray-800 font-semibold dark:text-gray-100">
        <div class="w-full">
            <form class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8" action="{{ route('admin.categories.store') }}"
                method="post">
                @csrf
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Name
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" type="text" name="name" value="{{ old('name') }}">
                    @error('name')
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
