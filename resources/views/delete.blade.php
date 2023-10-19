@vite('resources/css/app.css')
<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full max-w-md mt-10">
            <h1 class="text-3xl text-center mb-16">¿Deseas eliminar el contacto?</h1>
            <div>
                <table class="table-auto w-full text-center border-collapse bg-red-300">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Teléfono</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Rol</th>
                            {{-- <th class="px-4 py-2">Actualizar</th> --}}
                            <th class="px-4 py-2">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($datos as $item) --}}
                            
                        
                        <tr>
                            <td class="px-4 py-2">>{{ $contacto->nombre }}</td>
                            <td class="px-4 py-2">{{ $contacto->telefono }}</td>
                            <td class="px-4 py-2">{{ $contacto->email }} </td>
                            <td class="px-4 py-2">{{ $contacto->nombre_categoria }} </td>
                            {{-- <td class="px-4 py-2">
                                <a href="{{ route('update') }}" class="px-3 py-1 border rounded text-yellow-500 border-yellow-300 hover:bg-yellow-500 hover:text-white">Actualizar</a>
                            </td> --}}
                            <td class="px-4 py-2">
                                <form action="{{ route('destroy', $contacto->id) }}" method="POST">
                                   @csrf
                                   @method('DELETE')
                                    <button onclick="eliminar" class="px-3 py-1 border rounded text-natural-100 border-natural-600 hover:bg-red-500 hover:text-white">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
