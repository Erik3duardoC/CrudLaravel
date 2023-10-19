@vite('resources/css/app.css')

<div class="container mx-auto bg-gray-400">
    <div class="mt-5 flex justify-between">
        <a href="{{ route('create') }}" class="bg-indigo-500 px-4 py-2 border rounded text-zinc-100 border-blue-500 hover:bg-blue-500 hover:text-white">Agregar</a>
        <a href="" class="bg-indigo-500 px-4 py-2 border rounded text-zinc-100 border-blue-500 hover:bg-blue-500 hover:text-white">Agregar Rol</a>
        <a href="" class="bg-red-400 px-4 py-2 border rounded text-zinc-100 border-red-500 hover:bg-red-500 hover:text-white">Terminar sesión</a>
    </div>
    <h1 class="mt-4 text-3xl text-center">Agenda</h1>
    {{-- @php
        print_r($datos);
    @endphp --}}
    <hr class="my-4">
    <table class="table-auto w-full text-center border-collapse">
        <thead>
            <tr>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Teléfono</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Rol</th>
                <th class="px-4 py-2">Actualizar</th>
                <th class="px-4 py-2">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
            
            
            <tr>
                <td class="px-4 py-2">{{ $item->nombre }}</td>
                <td class="px-4 py-2">{{ $item->telefono }}</td>
                <td class="px-4 py-2">{{ $item->email }}</td>
                <td class="px-4 py-2">{{ $item->nombre_categoria }}</td>
                <td class="px-4 py-2">
                    <form action="{{ route('update', $item->id) }}" method="GET">
                        {{-- <a href="" class="bg-amber-500 px-3 py-1 border rounded text-zinc-50 border-yellow-300 hover:bg-yellow-600">Actualizar</a> --}}
                        <button class="bg-amber-500 px-3 py-1 border rounded text-zinc-50 border-yellow-300 hover:bg-yellow-600">Actualizar</button>
                    </form>
                </td>
                <td class="px-4 py-2">
                    <form action="{{ route('delete', $item->id) }}" method="GET">
                        <button onclick="eliminar" class="bg-rose-500 px-3 py-1 border rounded text-zinc-50 border-red-600 hover:bg-red-600">Eliminar</button>
                    </form>
                </td>
            </tr>
            
            @endforeach
            
            
        </tbody>
    </table>
    {{-- chartJS --}}
    {{-- <canvas id="myChart" width="500" height="500"></canvas>
    @section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js"></script>
    <script>
        
        
        const ctx = document.getElementById('myChart');
        
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            
            </script>
            
            @endsection --}}
            
            {{-- END chartJS --}}
        </div>
        