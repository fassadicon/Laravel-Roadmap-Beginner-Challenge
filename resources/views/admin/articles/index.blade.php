<x-app-layout>
    <x-slot name="header">
        <h2 class=" text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Manage Articles
        </h2>
        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Create</a>
    </x-slot>
    <div class="p-6 text-xl text-gray-800 font-semibold dark:text-gray-100">
        <table class="border-separate border border-slate-500">
            <thead class="">
                <tr>
                    <th>Title</th>
                    <th>Full Text</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->full_text }}</td>
                        <td>{{ $article->image }}</td>
                        <td>{{ $article->category->name }}</td>
                        <td>
                            @foreach ($article->tags as $tag)
                                {{ $tag->name }}
                            @endforeach
                        </td>
                        <td>{{ $article->user->name }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->updated_at }}</td>
                        <td>
                            {{-- <a href="{{ route('admin.articles.edit', [$article]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                Edit
                            </a>
                            <a href="{{ route('admin.articles.destory', [$article]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                Delete
                            </a> --}}
                            <a href="{{ route('admin.articles.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                Create
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>