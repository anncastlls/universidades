@extends('layout.app')

@section('content')

@php
use Illuminate\Support\Facades\Storage;
@endphp

<!-- HERO -->
<section class="w-screen relative left-1/2 -translate-x-1/2">

    <!-- IMAGEN HERO -->
    <img src="{{ Storage::url($carrera->imagen) }}"
         class="w-full h-[400px] object-cover">

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- TITULO -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold">
            {{ $carrera->nombre }}
        </h1>
    </div>

</section>

<!-- CONTENIDO -->
<section class="pt-20 px-6 max-w-5xl mx-auto">

    <!-- CARD PRINCIPAL -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden">

        <!-- IMAGEN DENTRO DE CARD -->
        <img src="{{ Storage::url($carrera->imagen) }}"
             class="w-full h-64 object-cover">

        <!-- CONTENIDO CARD -->
        <div class="p-6">

            <h2 class="text-2xl font-bold mb-4 text-gray-800">
                Descripción de la carrera
            </h2>

            <div class="text-gray-600 leading-relaxed">
                {!! $carrera->descripcion !!}
            </div>

        </div>

    </div>

    <!-- UNIVERSIDADES -->
    @if($carrera->universidades && $carrera->universidades->count())
    <div class="mt-10">

        <h2 class="text-2xl font-bold mb-4">
            Universidades que la ofrecen
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

            @foreach($carrera->universidades as $uni)
                <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                    {{ $uni->nombre }}
                </div>
            @endforeach

        </div>

    </div>
    @endif

    <!-- BOTÓN REGRESAR -->
    <div class="text-center mt-10">
        <a href="{{ route('carrera.index') }}"
           class="inline-block bg-gray-800 text-white px-6 py-2 rounded-lg hover:bg-gray-900 transition">
            ← Volver al catálogo
        </a>
    </div>

</section>

@endsection