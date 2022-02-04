@extends('layouts.plantilla')
@section('title','Nuevo Paciente')
@section('contenido')

<div class="container p-4 rounded-md border border-pink-200 bg-white shadow-lg">
    <form action="#" method="POST">
        <div class="overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="bg-pink-100 flex justify-center rounded mb-2">Datos Personales</div>
            <div class="grid grid-cols-6 gap-6">
                
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Nombres</label>
                <input type="text" name="nombre" id="nombre" autocomplete="given-name" class="mt-1 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-sm sm:text-sm border-pink-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Apellido paterno</label>
                <input type="text" name="apellido_paterno" id="apellido_paterno" autocomplete="family-name" class="mt-1 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-sm sm:text-sm border-pink-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Apellido materno</label>
                <input type="text" name="apellido_materno" id="apellido_materno" class="mt-1 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-sm sm:text-sm border-pink-300 rounded-md">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="mt-1 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-sm sm:text-sm border-pink-300 rounded-md">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Correo</label>
                <input type="text" name="correo" id="correo" autocomplete="email" class="mt-1 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-sm sm:text-sm border-pink-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <div class="">
                    <label for="form-radio" class="block text-sm font-medium text-gray-700">Sexo</label>
                    <div class="mt-2 ml-8">
                      <label class="inline-flex items-center">
                        <input type="radio" class="form-radio border-pink-500 focus:ring-pink-600 text-pink-600 checked:bg-pink-600" name="sexo" id="sexo" value="H">
                        <span class="ml-2">Masculino</span>
                      </label>
                      <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio border-pink-500 focus:ring-pink-500 text-pink-500 checked:bg-pink-500" name="sexo" id="sexo" value="M">
                        <span class="ml-2">Femenino</span>
                      </label>
                    </div>
                  </div>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="street-address" class="block text-sm font-medium text-gray-700">Celular</label>
                <input type="text" name="celular" id="celular" autocomplete="street-address" class="mt-1 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-sm sm:text-sm border-pink-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="city" class="block text-sm font-medium text-gray-700">Telefono</label>
                <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-sm sm:text-sm border-pink-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-6">
                <label for="street-address" class="block text-sm font-medium text-gray-700">Dirección</label>
                <input type="text" name="direccion" id="direccion" autocomplete="street-address" class="mt-1 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-sm sm:text-sm border-pink-300 rounded-md">
              </div>

            </div>

            <div class="bg-pink-100 flex justify-center rounded mt-4 mb-2">Datos del apoyo</div>
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="apoyo" class="block text-sm font-medium text-gray-700">Tipo de apoyo</label>
                    <select id="apoyo" name="apoyo" autocomplete="apoyo" class="mt-1 block w-full py-2 px-3 border border-pink-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                      <option value="usg">USG</option>
                      <option value="mastografia">MASTOGRAFÍA</option>
                      <option value="papanicolaou">PAPANICOLAOU</option>
                      <option value="medicamento">MÉDICAMENTO</option>
                      <option value="consulta_medica">CONSULTA MÉDICA</option>
                      <option value="consulta_psicologica">CONSULTA PSICOLOGÍCA</option>
                      <option value="otro">OTRO</option>
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3 hidden">
                    <label for="detalles_apoyo" class="block text-sm font-medium text-gray-700">Detalles del apoyo</label>
                    <input type="text" name="detalles_apoyo" id="detalles_apoyo" class="mt-1 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-sm sm:text-sm border-pink-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-6">
                    <label for="observaciones" class="block text-sm font-medium text-gray-700">Observaciones</label>
                    <textarea name="observaciones" id="observaciones" rows="3" cols="4" class="mt-1 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-sm sm:text-sm border-pink-300 rounded-md"></textarea>
                  </div>

            </div>
          </div>
          <div class="px-4 py-3 bg-pink-100 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Guardar</button>
          </div>
        </div>
      </form>
</div>

@endsection