@extends('layout.app')

@section('content')

<div class="bg-gray-100 py-10">

    <div class="max-w-lg mx-auto bg-white rounded-xl shadow-lg overflow-hidden">

        <!-- Encabezado -->
        <div class="bg-red-600 text-white text-center py-5">
            <h2 class="text-xl font-bold">Contáctanos</h2>

            <p class="text-sm mt-1">
                ¿Tienes dudas sobre alguna universidad o carrera? Déjanos tu pregunta.
            </p>
        </div>

        <!-- Formulario -->
        <div class="p-6">

            @if(session('success'))
                <div class="bg-red-500 text-white p-2 mb-4 rounded text-center text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contacto.envia') }}" method="POST">

                @csrf

                <!-- Nombre -->
                <div class="mb-3">

                    <label class="block text-gray-700 text-sm mb-1">
                        Nombre completo
                    </label>

                    <input
                        type="text"
                        name="nombre completo"
                        placeholder="Ej. Juan Pérez López"
                        class="w-full border p-2 rounded-md text-sm">

                </div>

                <!-- Correo -->
                <div class="mb-3">

                    <label class="block text-gray-700 text-sm mb-1">
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        name="correo"
                        placeholder="ejemplo@correo.com"
                        class="w-full border p-2 rounded-md text-sm">

                </div>

                <!-- Teléfono -->
                <div class="mb-3">

                    <label class="block text-gray-700 text-sm mb-1">
                        Teléfono
                    </label>

                    <input
                        type="text"
                        name="telefono"
                        placeholder="Ej. 9211234567"
                        class="w-full border p-2 rounded-md text-sm">

                </div>

                <!-- Pregunta -->
                <div class="mb-4">

                    <label class="block text-gray-700 text-sm mb-1">
                        Pregunta
                    </label>

                    <textarea
                        name="pregunta"
                        rows="4"
                        class="w-full border p-2 rounded-md text-sm"></textarea>

                </div>

                <!-- Botón -->
                <div class="text-center">

                    <button
                        type="submit"
                        class="bg-red-600 text-white px-5 py-2 rounded-md hover:bg-red-700">

                        Enviar pregunta

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection