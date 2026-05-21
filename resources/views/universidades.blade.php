@extends('layout.app')
@section('content')
@php
use Illuminate\Support\Facades\Storage;
@endphp
<!--Sección de foto Principal-->
<section class="w-screen relative left-1/2 -translate-x-1/2">
    <img src="universidad.webp" alt="Universidad" class="w-full h-[400px] object-cover">

    <!--Div de opacidad-->
    <div class="absolute inset-0 bg-black/50"></div>

    <!--Div para titulo y parrafo sobre la foto-->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold">
            Encuentra tu universidad ideal
        </h1>
        <p class="text-lg md:text-xl max-w-2xl">
            Explora las mejores opciones académicas y descubre tu futuro profesional.
        </p>
    </div>
</section>

<!--Sección de titulo y parrafo-->
<section class="pt-20 px-6">
    <h1 class="text-3xl font-bold text-center mb-10">Universidades destacadas</h1>
    <p class="pb-4 text-gray-600 leading-relaxed max-w-4xl mx-auto">Esta página web tiene como objetivo principal brindar información clara, organizada y accesible a estudiantes preuniversitarios que se encuentran en el proceso de elegir su futuro académico. Sabemos que esta etapa implica tomar decisiones importantes, por lo que el propósito de este sitio es facilitar el acceso a datos relevantes sobre universidades, carreras y opciones educativas disponibles. </p>
    <p class="pb-4 text-gray-600 leading-relaxed max-w-4xl mx-auto"> A través de esta plataforma, los estudiantes podrán explorar distintas instituciones, conocer características generales de cada una y comparar alternativas que se ajusten a sus intereses y metas personales. La intención es ofrecer una herramienta informativa que ayude a tomar decisiones más seguras y fundamentadas sobre su formación profesional.</p>
</section>

<!--Sección de universidades-->
<section class="w-full pt-10 px-6 grid grid-cols-1 sm:grid-cols-2 gap-8">
@foreach($universidades as $universidad)
    <!--Card1-->
    <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        
<img src="{{ Storage::url($universidad->imagen) }}" class="w-full object-cover h-60 rounded-t-lg">
    <h3 class="text-lg font-semibold text-center py-4"> {{ $universidad->nombre }} </h3>
        <a href="{{ route('universidades.show', $universidad) }}" class="block w-full text-center bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
    Más detalles
</a>
    </div>
@endforeach



</section>

@endsection