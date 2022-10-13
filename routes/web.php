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

// Mes views
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test/{id}', function ($id) {
    return view('test', [
        'id'=> $id
    ]);
});
Route::get('/admin/users',function(){
    return view('admin.listeusers');
});
Route::get('/base', function () {
    return view('base');
});
Route::get('/view', function () {
    return view('view');
});

Route::get('/articles/{id}', function($id){
    return 'L\' article : '.$id;
});
Route::get('/articles/{id}/comment/{author}', function($id, $author){
    return 'L\' article : '.$id.' publié par : '.$author;
});
Route::get('/articles/{id}/comment/{author}/opti/{paramOptionnel?}', function($id, $author, $popo="moi"){
    return 'L\' article : '.$id.' publié par : '.$author.' et le param : '.$popo;
});




// Creer des groupements d'url
Route::prefix('admin')->group(function(){

    Route::get('articles',function(){
        return 'Ma liste d\'articles';
    });
    Route::get('categories',function(){
        return [
            "prenom"=> "Hugo",
            "Nom"=> "Stawiarski"
        ];
    });    
});










/*
// Les differents types de routes
Route::get('/env', function () {
    dd(env('DB_DATABASE'));
});
// Redirection de /test vers homepage
Route::redirect('/test', '/') ;

Route::get('/get', function () {
    return 'GET route';
});
Route::post('/post', function () {
    return 'POST route';
});
Route::put('/put', function () {
    return 'PUT route';
});
Route::delete('/delete', function () {
    return 'DELETE route';
});
Route::any('/any', function () {
    return 'ANY route';
});
*/