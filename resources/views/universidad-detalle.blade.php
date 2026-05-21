@extends('layout.app')

@section('content')
<!--seccion de contenido -->
<section class="max-w-5xl mx-auto px-6 py-12">

    <!-- Imagen de la universidad -->
    <img src="{{ asset('storage/' . $universidad->imagen) }}"
         class="w-full h-[400px] object-cover rounded-xl shadow mb-8"
         alt="{{ $universidad->nombre }}">

    <!-- Nombre -->
    <h1 class="text-4xl font-bold mb-6">
        {{ $universidad->nombre }}
    </h1>

    <!-- Descripción -->
    <div class="text-gray-700 leading-relaxed space-y-4">
        {!! $universidad->descripcion !!}
    </div>

    <!-- Redes sociales -->
    <div class="mt-10">
        <h2 class="text-2xl font-semibold mb-4">Redes sociales</h2>

        <div class="flex flex-wrap gap-4">

            @if($universidad->facebook)
                <a href="{{ $universidad->facebook }}" target="_blank"
                   class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Facebook
                </a>
            @endif

            @if($universidad->instagram)
                <a href="{{ $universidad->instagram }}" target="_blank"
                   class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600 transition">
                    Instagram
                </a>
            @endif

            @if($universidad->twitter)
                <a href="{{ $universidad->twitter }}" target="_blank"
                   class="bg-blue-400 text-white px-4 py-2 rounded hover:bg-blue-500 transition">
                    Twitter
                </a>
            @endif

            @if($universidad->web)
                <a href="{{ $universidad->web }}" target="_blank"
                   class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                    Sitio web
                </a>
            @endif

        </div>
    </div>

    <!-- Botón regresar -->
    <div class="mt-10">
        <a href="{{ url('/') }}"
           class="inline-block bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-gray-900 transition">
            ← Regresar
        </a>
    </div>

</section>
@endsection