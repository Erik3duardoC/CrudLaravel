@vite('resources/css/app.css')

<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full max-w-md mt-10">
            <h1 class="text-4xl mb-5 text-center">Nuevo registro</h1>
            <div>
                <form action="{{ route('registernewuser') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="block text-gray-600">Nombre</label>
                        <input type="text" name="nombre" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" aria-describedby="nombreHelp">
                        <p class="text-gray-400 text-sm">Ingresa el nombre</p>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="block text-gray-600">Email</label>
                        <input type="email" name="email" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" aria-describedby="emailHelp">
                        <p class="text-gray-400 text-sm">Ingresa el email</p>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="block text-gray-600">Password</label>
                        <input type="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" aria-describedby="passwordHelp">
                        <p class="text-gray-400 text-sm">Ingresa el password</p>
                    </div>
                   
                    <hr class="my-4">
                    <button type="submit" id="crear" class="w-full bg-emerald-300 hover:bg-teal-400 text-white font-bold py-2 px-4 rounded">Registrarse</button>
                </form>

                
                
            </div>
        </div>
    </div>
</div>
