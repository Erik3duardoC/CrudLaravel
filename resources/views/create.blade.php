    @vite('resources/css/app.css')
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md mt-10">
                <h1 class="text-4xl mb-5 text-center">Crear contacto</h1>
                <div>
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="block text-gray-600">Nombre</label>
                            <input type="text" name="nombre" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" aria-describedby="nombreHelp">
                            <p class="text-gray-400 text-sm">Ingresa el nombre</p>
                    </div>
                        <div class="mb-3">
                            <label for="nombre" class="block text-gray-600">Apellido</label>
                            <input type="text" name="apellidos" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" aria-describedby="apellidosHelp">
                            <p class="text-gray-400 text-sm">Ingresa el apellido</p>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="block text-gray-600">Teléfono</label>
                        <input type="text" name="telefono" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" aria-describedby="telefonoHelp">
                        <p class="text-gray-400 text-sm">Ingresa el teléfono</p>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="block text-gray-600">Email</label>
                        <input type="email" name="email" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" aria-describedby="emailHelp">
                        <p class="text-gray-400 text-sm">Ingresa el email</p>
                    </div>
                    <div class="mb-3">
                        <label for="rol" class="block text-gray-600">Categoría</label>
                        <select name="rol" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            <option value=""></option>
                        </select>
                        <p class="text-gray-400 text-sm">Ingresa la categoría</p>
                    </div>
                    <hr class="my-4">
                    <div class="flex space-x-4">
                        <button id="create" type="submit" class="w-full bg-red-300 hover:bg-rose-600 text-white font-bold py-2 px-4 rounded">Crear</button>
                        <a class="flex-1 bg-green-400 px-3 py-2 rounded hover:bg-green-300" href="{{ route('read') }}">Regresar   </a>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
