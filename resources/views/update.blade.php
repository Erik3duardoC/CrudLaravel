@vite('resources/css/app.css');

<div class="flex items-center justify-center">
    <div class="w-full max-w-md">
        <h1 class="text-3xl text-center">Actualizar contacto</h1>
        {{-- @php
            print_r($contacto);
            @endphp --}}
            <div>
                <input type="text" id="id" value="" hidden>
                <div class="mb-3">
                    <form action="{{ route('edit', $contacto->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                    <label for="" class="block text-gray-600">Nombre</label>
                    <input type="text" name="nombre" class="w-full px-3 py-2 border rounded-md bg-gray-100 focus:outline-none" id="nombre" required value="{{ $contacto->nombre }}">
                    <div class="text-gray-400 text-sm">Ingresa el nombre a actualizar</div>
                </div>
            <div class="mb-3">
                <label for="" class="block text-gray-600">Apellidos</label>
                <input type="text" name="apellidos" class="w-full px-3 py-2 border rounded-md bg-gray-100 focus:outline-none" id="apellidos" required value="{{ $contacto->apellidos }}">
                <div class="text-gray-400 text-sm">Ingresa el apellido a actualizar</div>
            </div>
            <div class="mb-3">
                <label for="telefono" class="block text-gray-600">Teléfono</label>
                <input type="text" name="telefono" class="w-full px-3 py-2 border rounded-md bg-gray-100 focus:outline-none" id="telefono" required value="{{ $contacto->telefono }}">
                <div class="text-gray-400 text-sm">Ingresa el teléfono a actualizar</div>
            </div>
            <div class="mb-3">
                <label for="email" class="block text-gray-600">Email</label>
                <input type="email" name="email" class="w-full px-3 py-2 border rounded-md bg-gray-100 focus:outline-none" id="email" required value="{{ $contacto->email }}">
                <div class="text-gray-400 text-sm">Ingresa el email a actualizar</div>
            </div>
            <hr class="my-4">
            <div class="flex space-x-4">
                <button id="update" class="w-full px-4 py-2 bg-sky-500 hover:bg-blue-700 text-white font-bold rounded text-center block">Actualizar</button>
                <a class="flex-1 bg-green-400 px-3 py-2 rounded hover:bg-green-300" href="{{ route('read') }}">Regresar   </a>
            </form>
            </div>
        </div>
    </div>
</div>

