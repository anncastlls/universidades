@extends('layout.app')

@section('content')

<!-- Título -->
<div >
    <h1 class="text-4xl md:text-5xl font-bold text-red text-center">
        Repaso examen
    </h1>
</div>

<!-- Card -->
<div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="mora.jpeg" alt="mora" class="w-full object-cover h-40 rounded-t-lg">
        <h3 class="text-lg font-semibold text-center py-4">
                Microdosis
            </h3>
<button class="w-full text-white bg-red-600 p-2 rounded-b-lg hover:bg-red-700 transition">
            <p class="text-white-700 text-sm text-justify">
                Es su segundo trabajo de estudio, compuesto por 15 canciones con colaboraciones de artistas como Feid, Sech y Jhayco. El álbum recibió certificaciones de Platino por la RIAA. Tras el éxito de su debut "Primer día de clases" (2021), "Microdosis" se consolidó gracias a éxitos virales, producciones de Subelo Neo y Taiko, y una propuesta estética innovadora.
            </p>
        </div>
</button>
    </div>
</div>

@endsection