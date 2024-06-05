<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Movies 2024') }}
            <a href="{{route('movies.create')}}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">
            Add New Movie</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="mb-4">
                        <thead>
                            <th class="px-4 py-2">Title</th>
                            <th class="px-4 py-2">Director</th>
                            <th class="px-4 py-2">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ( $movies as $movie )
                                <tr>
                                    <td class="border px-4 py-2">{{$movie->title}}</td>
                                    <td class="border px-4 py-2">{{$movie->director}}</td>
                                    <td class="border px-4 py-2">

                                        <form action={{route('movies.destroy',$movie->id)}} method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                                            <a href="" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                        </form>
                                        
                                        <td class="border px-4 py-2">
                                            @csrf
                                            @method('PUT')
                                            <a href="{{route('movies.edit',$movie)}}">Edit</a>
                                        </td>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
