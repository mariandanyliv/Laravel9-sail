<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="{{ route('posts.create') }}">Add new post</a>
                    <table>
                        <tableh>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                            </tr>
                        </tableh>
                        <tbogy>
                            @foreach($posts as $post)
                                @if(Auth::user()->is_admin || $post->user_id == Auth::user()->id)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->category->name }}</td>
                                        <td><a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="{{ route('posts.edit', $post) }}">Edit</a>
                                            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" onclick="return confirm('Are your sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbogy>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
