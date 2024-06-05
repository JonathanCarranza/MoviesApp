@csrf
                        <div class="mb-4">
                            <label for="title"class="block text-sm font-medium text-gray-700 dark:text-gray-200">Title</label>
                            <input type="text" 
                            name="title" 
                            id="title" 
                            value="{{$movie->title ?? ''}}"
                            class="form-input dark:bg-gray-700 rounded-md shadow-sm mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <label for="director"class="block text-sm font-medium text-gray-700 dark:text-gray-200">Director</label>
                            <input 
                            type="text" 
                            name="director" 
                            id="director" 
                            value="{{$movie->director ?? ''}}"
                            class="form-input dark:bg-gray-700 rounded-md shadow-sm mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <label for="image"class="block text-sm font-medium text-gray-700 dark:text-gray-200">URL Image</label>
                            <input 
                            type="text" 
                            name="image" 
                            id="image" 
                            value="{{$movie->image ?? ''}}"
                            class="form-input dark:bg-gray-700 rounded-md shadow-sm mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <label for="genero"class="block text-sm font-medium text-gray-700 dark:text-gray-200">Genero</label>
                            <input 
                            type="text" 
                            name="genero" 
                            id="genero" 
                            value="{{$movie->genero ?? ''}}"
                            class="form-input dark:bg-gray-700 rounded-md shadow-sm mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <label for="description"class="block text-sm font-medium text-gray-700 dark:text-gray-200">Synopsis</label>
                            <input 
                            type="text" 
                            name="description" 
                            id="description" 
                            value="{{$movie->description ?? ''}}"
                            class="form-input dark:bg-gray-700 rounded-md shadow-sm mt-1 block w-full">
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>