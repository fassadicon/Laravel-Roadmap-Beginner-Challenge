<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Manage Categories
        </h2>
        <div>
            <a href="{{ route('admin.categories.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Create</a>
        </div>

    </x-slot>
    <div class="p-6 text-xl text-gray-800 font-semibold dark:text-gray-100">
        <table class="border-separate border border-slate-500">
            <thead class="">
                <tr>
                    <th>Name</th>
                    <th>No. of Articles</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td><a href="{{ route('admin.categories.show', [$category]) }}">{{ $category->name }}</a></td>
                        <td>{{ $category->articles()->count() }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', [$category]) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                Edit
                            </a>
                            <form action="{{ route('admin.categories.destroy', [$category]) }}" method="POST"
                                onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
