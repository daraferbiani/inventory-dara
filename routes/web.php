<?php

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

Route::get('/hello', function () {
    echo "Hello Word";
});

Route::get('/name/{Dara}', function ($name) {
    echo "Hello" . $name;
});

Route::get('/data/{data?}', function ($data = "190313007") {
    return "Isi Parameter = " . $data;
});

Route::get('/name/{Dara}', function ($name) {
    echo "Hello" . $name;
})->where('Dara', '[A-Za-z]+');

Route::get('/mahasiswa/{nrp}/{nama}', function ($nrp,$nama) {
    return $nrp ."190313007/Dara Febriani Iskandar  ". $nama;
});

Route::get('/mahasiswa/{nrp}/{nama}', function ($nrp,$nama) {
    return $nrp ."190313007/Dara Febriani Iskandar  ". $nama;
})->where([
    'nrp'=> '[0-9]+',
    'nama'=> '[A-Za-z]+'
]);

Route::get('/cekbilangan/{bilangan}', function ($bilangan) {
    if($bilangan % 2==0){
        return "bilangan Genap";
    }else{
        return "bilangan Ganjil";
    }});

    
Route::get('/deretbilangan/{bilangan}', function ($bilangan) {
        for ($i = 0; $i <= $bilangan; $i++){
            if($i % 2 == 0){
                echo "{$i} genap";
                echo "</br>";
            }else{
                echo "{$i} ganjil";
                echo "</br>";
            }
            
        }
    }
);
Route :: get('/person', "PersonController@index");
Route:: get('/person/add', 'PersonController@add');
Route:: get('/person/addProcess', 'PersonContoller@addProcess');