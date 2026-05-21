<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Plataforma universitaria Annia</title>
</head>
<body class="bg-red-100 text-red-800 flex flex-col min-h-screen">

<!-- Encabezado -->
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        
        <div class="flex items-center gap-3">
            <img src="logo.png" alt="Logotipo Institucional" class="h-10 w-10 object-contain">
            <div>
                <h1 class="text-xl font-bold text-red-700">
                    Uniweb - Annia
                </h1>
            </div>
        </div>

        <nav class="space-x-6 text-sm font-medium">
            <a href="{{url('/') }}" class="text-red-600 hover:text-red-600">Inicio</a>
            <a href="{{route('carrera.index') }}" class="text-red-600 hover:text-red-600">Carreras</a>
            <a href="#" class="text-red-600 hover:text-red-600">Preguntas Frecuentes</a>
            <a href="{{url('/contacto') }}" class="text-red-600 hover:text-red-700">Contacto</a>
        </nav>

    </div>
</header>

<!-- Contenido principal -->
<main class="flex-1">
    <div class="max-w-4xl mx-auto px-6 py-10">
        @yield('content')
    </div>
</main>

<!-- Pie de página -->
<footer class="bg-red-900 text-red-300">
    <div class="max-w-7xl mx-auto px-6 py-6 text-sm text-center space-y-1">
        <p><strong>Nombre:</strong> Annia Camila Martínez Castellanos</p>
        <p><strong>Grupo:</strong> Tercero B Físicos</p>
        <p><strong>Número de lista:</strong> 21</p>
        <p><strong>Materia:</strong> Páginas web</p>
    </div>
</footer>

</body>
</html>
