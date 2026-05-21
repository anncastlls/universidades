@extends('layout.app')

@section('content')

@php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
@endphp

<!-- HERO -->
<section class="w-screen relative left-1/2 -translate-x-1/2">
    <img src="universidad.webp" alt="Carreras" class="w-full h-[400px] object-cover">

    <div class="absolute inset-0 bg-black/50"></div>

    <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold">
            Catálogo de Carreras
        </h1>
        <p class="text-lg md:text-xl max-w-2xl">
            Explora todas las opciones académicas disponibles y elige tu futuro profesional.
        </p>
    </div>
</section>

<!-- INTRO -->
<section class="pt-20 px-6">
    <h1 class="text-3xl font-bold text-center mb-10">Carreras disponibles</h1>

    <p class="pb-4 text-gray-600 leading-relaxed max-w-4xl mx-auto text-center">
        Aquí encontrarás un catálogo completo de carreras profesionales disponibles en nuestras universidades.
    </p>
</section>

<!-- CATALOGO -->
<section class="w-full pt-10 px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">

@foreach($carreras as $carrera)

    <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

        <!-- IMAGEN REAL -->
        <div class="h-40 overflow-hidden">
            <img src="{{ Storage::url($carrera->imagen) }}" 
                 class="w-full h-full object-cover">
        </div>

        <!-- CONTENIDO -->
        <div class="p-5">

            <h3 class="text-xl font-bold text-center mb-2">
                {{ $carrera->nombre }}
            </h3>

            <p class="text-gray-500 text-sm text-center mb-4 line-clamp-3">
                {{ Str::limit(strip_tags($carrera->descripcion), 90) }}
            </p>

            <a href="{{ route('carrera.detalle', $carrera) }}"
               class="block text-center bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
                Más detalles
            </a>

        </div>

    </div>

@endforeach

</section>

@endsection