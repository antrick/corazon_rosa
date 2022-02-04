<div class="p-6 w-58 border-2 bg-white min-h-full shadow" role="menu" x-show="sidebar" @click.away="sidebar = false"
x-transition:enter="transition ease-out duration-300"
x-transition:enter-start="opacity-0 scale-90"
x-transition:enter-end="opacity-100 scale-100"
x-transition:leave="transition ease-in duration-300"
x-transition:leave-start="opacity-100 scale-100"
x-transition:leave-end="opacity-0 scale-90">
    <div class="divide-y ">
                        
        <div class="flex-1 flex items-center justify-center sm:items-stretch mb-4">
            <div class="flex-shrink-0 flex items-center">
                <a href=""><img class="block lg:hidden h-12 w-auto" src="{{asset('img/logo.png')}}" alt="Workflow"></a>
                <a href=""><img class="hidden lg:block h-12 w-auto" src="{{asset('img/logo.png')}}" alt="Workflow"></a>
            </div>
        </div>
        

        <div class="">
            <h6 class="font-bold text-pink-500 mt-4 mb-4">Acciones Rapidas</h6>
            <ul>
                <li class="mb-4">
                    <a class="p-3 flex flex-row border border-pink-500 hover:bg-pink-100 text-base hover:shadow-lg hover:drop-shadow-lg rounded-md cursor-pointer text-pink-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                          </svg>
                        Inicio
                    </a>
                </li>
                <li class="mb-4">
                    <a class="p-3 flex flex-row border border-pink-500 hover:bg-pink-100 text-base hover:shadow-lg hover:drop-shadow-lg rounded-md cursor-pointer text-pink-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                          </svg>
                        Nuevo Paciente
                    </a>
                </li>
                <li class="mb-4">
                    <a class="p-3 flex flex-row border border-pink-500 hover:bg-pink-100 hover:shadow-lg hover:drop-shadow-lg rounded-md cursor-pointer text-pink-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                          </svg>
                        Lista Pacientes
                    </a>
                </li>
                <li class="mb-4">
                    <a class="p-3 flex flex-row border border-pink-500 hover:bg-pink-100 hover:shadow-lg hover:drop-shadow-lg rounded-md cursor-pointer text-pink-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                          </svg>
                        Nuevo Apoyo
                    </a>
                </li>
                <li class="mb-4">
                    <a class="p-3 flex flex-row border border-pink-500 hover:bg-pink-100 hover:shadow-lg hover:drop-shadow-lg rounded-md cursor-pointer text-pink-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>
                        Configuración
                    </a>
                </li>
            </ul>
        </div>
        
    </div>
</div>