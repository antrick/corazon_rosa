<nav class="sticky top-0 bg-white border shadow">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-14 ">
      <div  class="absolute inset-y-0 left-0 flex items-center ">
        <button type="button" @click="sidebar = true" class="inline-flex items-left justify-left p-2 rounded-md border border-transparent text-pink-500 hover:shadow hover:text-pink-500 hover:border-pink-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">  
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
      
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex-1 flex items-center justify-center sm:items-stretch ">
        <div class="flex-shrink-0 flex items-center">
          <a href="{{ route('dashboard')}}"><img class="block lg:hidden h-8 w-auto" src="{{asset('img/logo.png')}}" alt="Workflow"></a>
          <a href="{{ route('dashboard')}}"><img class="hidden lg:block h-10 w-auto" src="{{asset('img/logo.png')}}" alt="Workflow"></a>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 " >

        <div class="ml-3 relative z-40" x-data="{ navbar: false }">
          <div>
          <button x-on:click="navbar = true" type="button" type="button" class="hover:bg-pink-100 flex text-sm rounded-full border border-pink-500 p-1" id="user-menu" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">hola </span>
            <h6 class="font-bold ml-2 mr-2 text-pink-500">Antonio</h6>
          </button>
          </div>
              <div x-show="navbar" x-on:click.away="navbar = false" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg p-2 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                    <p class="block px-4 py-2 text-sm text-gray-700 border-b-2 ">¡Bienvenid@ !</p>
                    {{-- <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Perfil</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Configuracion</a> --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-100 w-full text-left" role="menuitem">Cerrar Sesion</button>
                    </form>
                </div>
        </div>
      </div>

    </div>


  </div>

</nav>