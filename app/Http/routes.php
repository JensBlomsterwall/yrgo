<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Notera att man kan använda sig av get() istället om man vill.
|
*/

Route::get('/', 'WelcomeController@index');

// En route i sin absolut enklaste form
Route::get('closure', function(){
    return 'Closure without view';
});

// Returnera en view direkt från vår closure
Route::get('closure-view', function(){
    return view('closure-view');
});

// En view som @extends vår master template
Route::get('extended-view', function(){
    return view('extended');
});

// Ex: my.app/query-params/anything
// Returns: "anything"
Route::get('query-params/{string}', function($string){
    return $string;
});

// Skicka med en variabel till vår template
Route::get('template-variables', function(){
    $cars = [
        'Saab',
        'Volvo',
        'BMW',
        'Skoda',
        'Mazda',
    ];

    return view('template-variables',  ['cars' => $cars]);
    // Alternativ syntax med compact()
    // Se: http://php.net/manual/en/function.compact.php
    //return view('template-variables', compact('cars'));
});

/* En route som använder sig av en Controller,
 * med en variabel skickad till sig och som visar en view.
 * Metoden som anropas på vår Controller är 'index'.
 * Controllern finns under app/Http/Controllers och är skapad med
 * php artisan make:controller SimpleController --plain
 * innifrån homestead.
 * Frågetecknet gör så att parametern string inte behöver vara satt.
 * Ex: my.app/controller/thiscouldbeanything
 */
Route::get('controller/{string?}', 'SimpleController@index');
