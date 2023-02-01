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
    $html = "
        <h1>Contact App</h1>
        <div>
            <a href='" . route('contacts.index') . "'>All contacts</a>
            <a href='" . route('contacts.create') . "'>Add contact</a>
            <a href='" . route('contacts.show', 1) . "'>Show contact</a>
        </div>
    ";
    return $html;
});

Route::get('contacts', function () {
    return "<h1>All contacts</h1>";
})->name('contacts.index');

Route::get('/contacts/create', function () {
    return "<h1>All new contacts</h1>";
})->name('contacts.create');

Route::get('/contacts/{id}', function ($id) {
    return "Contact " . $id;
})->name('contacts.show');

//Route::get('/contacts/{id}', function ($id) {
//    return "Contact " . $id;
//})->whereNumber('id');//->where('id', '[0-9]+');
//
//Route::get('/companies/{name?}', function ($name = null) {
//    if ($name) {
//        return "Company " . $name;
//    } else {
//        return "All Companies";
//    }
//})->whereAlphaNumeric('name');//->whereAlpha('name');//->where('name', '[a-zA-Z]+');
