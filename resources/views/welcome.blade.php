<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cadastro de mecanicas</title>

    @vite('resources/css/app.css')
</head>
<body>
<div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
    <div
        class="w-full p-6 m-auto bg-white border-t border-purple-600 rounded shadow-lg shadow-purple-800/50 lg:max-w-md">
        <h1 class="text-3xl font-semibold text-center text-purple-700">LOGO</h1>

        <form class="mt-6">
            <div>
                <label for="email" class="block text-sm text-gray-800">E-mail</label>
                <input type="email"
                    class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            <div class="mt-4">
                <div>
                    <label for="password" class="block text-sm text-gray-800">Senha</label>
                    <input type="password"
                        class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                <a href="#" class="text-xs text-gray-600 hover:underline">Esqueceu sua senha?</a>
                <div class="mt-6">
                    <button
                        class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-purple-700 rounded-md hover:bg-purple-600 focus:outline-none focus:bg-purple-600">
                        Login
                    </button>
                </div>
        </form>
        <p class="mt-8 text-xs font-light text-center text-gray-700"> Não tem uma conta? <a href="#"
                class="font-medium text-purple-600 hover:underline">Cadastre-se aqui</a></p>
    </div>
</div>
</body>
</html>