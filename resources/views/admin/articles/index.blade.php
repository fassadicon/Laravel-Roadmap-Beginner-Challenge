<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Manage Articles
        </h2>
        <div>
            <a href="{{ route('admin.articles.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Create</a>
        </div>

    </x-slot>
    <div class="p-6 text-xl text-gray-800 font-semibold dark:text-gray-100">
        <table class="border-separate border border-slate-500">
            <thead class="">
                <tr>
                    <th>Title</th>
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
                        <td>
                            <a href="{{ route('show', [$article]) }}">{{ $article->title }}</a>
                        </td>
                        <td>{{ $article->image }}</td>
                        <td>{{ $article->category->name ?? 'Uncategorized'}}</td>
                        <td>
                            @forelse ($article->tags as $tag)
                                {{ $tag->name }}
                            @empty
                                No tags
                            @endforelse
                        </td>
                        <td>{{ $article->user->name }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.articles.edit', [$article]) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                Edit
                            </a>
                            <form action="{{ route('admin.articles.destroy', [$article]) }}" method="POST"
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
