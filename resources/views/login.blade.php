<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        
</head>
<body>

<!-- component -->
<div class="w-full min-h-screen bg-gray-50 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
  <div class="w-full sm:max-w-md p-5 mx-auto">
    <div class="flex justify-center">
    <img src="{{asset('img/logo_vertical.png')}}" alt="corazon_rosa" class="h-32">
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
      <div class="mb-4">
        <label class="block mb-1" for="email">Correo</label>
        <input id="email" type="text" name="email" class="py-2 px-3 border border-gray-300 focus:border-pink-300 focus:outline-none focus:ring focus:ring-pink-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
      </div>
      <div class="mb-4">
        <label class="block mb-1" for="password">Contraseña</label>
        <input id="password" type="password" name="password" class="py-2 px-3 border border-gray-300 focus:border-pink-300 focus:outline-none focus:ring focus:ring-pink-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
      </div>
      <div class="mt-6 flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember_me" type="checkbox" class="border border-gray-300 text-red-600 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50" />
          <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900"> Remember me </label>
        </div>
        <a href="#" class="text-sm"> ¿Olvido su contraseña? </a>
      </div>
      <div class="mt-6">
        <button class="w-full inline-flex items-center justify-center px-4 py-2 bg-pink-500 border border-transparent rounded-md font-semibold capitalize text-white hover:bg-pink-700 active:bg-pink-700 focus:outline-none focus:border-pink-700 focus:ring focus:ring-pink-200 disabled:opacity-25 transition">Ingresar</button>
      </div>
      <div class="mt-6 text-center">
        {{-- <a href="#" class="underline">Sign up for an account</a> --}}
      </div>
    </form>
  </div>
</div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>