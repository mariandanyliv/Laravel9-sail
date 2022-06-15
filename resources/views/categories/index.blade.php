<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('categories.create') }}">Add new category</a>
                    <table>
                        <tableh>
                            <tr>
                                <th>Name</th>
                                <th></th>
                            </tr>
                        </tableh>
                        <tbogy>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td><a href="{{ route('categories.edit', $category) }}">Edit</a>
                                        <form method="POST" action="{{ route('categories.destroy', $category) }}">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" onclick="return confirm('Are your sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbogy>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
