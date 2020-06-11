<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

    Route::get('/XML/Lista', 'XMLController@XML_Array')->name('ListaXML');
    Route::post('/XML/Lista', 'XMLController@vistaXML')->name('vistaXML');
    Route::get('/', 'XMLController@store');
    Route::post('/', 'XMLController@store')->name('guarda');
    
    Route::get('/xml', function() {
        $xml = XmlParser::load(storage_path('app/src/registro.xml'));
    
        $test = $xml->parse([
            'vesselId' => ['uses' => 'pressureVessel.generalVesselInfo.identifier'],
            'vesselLocation' => ['uses' => 'pressureVessel.generalVesselInfo.location'],
            'vesselPurchaser' => ['uses' => 'pressureVessel.generalVesselInfo.purchaser'],
        ]);
    
        dd($test);
    });
