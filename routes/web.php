<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universidad;
use App\Models\Carrera;
use Illuminate\Http\Request;
use App\Models\aspirantes;
/*
|--------------------------------------------------------------------------
| HOME - UNIVERSIDADES
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $universidades = Universidad::latest()->get();
    return view('universidades', compact('universidades'));
});


/*
|--------------------------------------------------------------------------
| DETALLE UNIVERSIDAD
|--------------------------------------------------------------------------
*/
Route::get('/universidades/{universidad}', function (Universidad $universidad) {
    $universidad->load('carreras');
    return view('universidad-detalle', compact('universidad'));
})->name('universidades.show');


/*
|--------------------------------------------------------------------------
| LISTADO DE CARRERAS
|--------------------------------------------------------------------------
*/
Route::get('/carreras', function () {
    $carreras = Carrera::latest()->get();
    return view('carrera', compact('carreras'));
})->name('carrera.index');


/*
|--------------------------------------------------------------------------
| DETALLE DE CARRERA
|--------------------------------------------------------------------------
*/
Route::get('/carreras/{carrera}', function (Carrera $carrera) {
    $carrera->load('universidades'); // importante si usas la relación
    return view('carrera-detalle', compact('carrera'));
})->name('carrera.detalle');




// Mostrar formulario
Route::get('/admin/contacto', function () {
    return view('contacto');
})->name('contacto');

// Guardar formulario
Route::post('/contacto', function (Request $request) {

    $datos = $request->validate([

        'nombre completo' => 'required|string|max:255',
        'correo' => 'required|email|max:255',
        'telefono' => 'required|string|max:20',
        'pregunta' => 'required|string|max:1000',

    ]);

    aspirantes::create($datos);

    return redirect()
        ->route('contacto')
        ->with('success', 'Tu pregunta fue enviada correctamente.');

})->name('contacto.envia');