<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud home</title>
</head>
<body>
    
    <div class="bg-slate-600 rounded p-8 text-white container-mt-6 mx-auto text-center">
        <h1 class="text-4xl mb-2">Crud con laravel</h1>

            {{-- Login --}}
        <section class="bg-gray-50 dark:bg-gray-00">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-6 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Ingresa a tu cuenta 
                        </h1>
                        <form class="space-y-6 md:space-y-6" action="#">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="correo@dominio.com" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                    </form>
                    </div>
                    <div class="p-4 flex justify-center space-x-8">
                        <a class="bg-green-400 px-3 py-2 rounded hover:bg-green-300" href="{{ route('read') }}">Entrar</a>
                        <a class="bg-orange-400 px-3 py-2 rounded hover:bg-yellow-400" href="{{ route('registernewuser') }}">Registrarse</a>
                    </div>
                </div>
            </div>
          </section>
{{--END Login --}}

    </div>
</body>
</html>