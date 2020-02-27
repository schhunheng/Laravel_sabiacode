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
// Route::get('/test',function(){
//     return "Chhunheng";
// });

Route::get('/test/{name?}',function($username="Chhunheng"){
        return $username;
})->where(['$username'=>'[a-zA-Z]+']);

// Route::get('user/profile', function () {
//     return 'named';
// })->name('profile');

Route::prefix('admin')->group(function (){
    Route::get('users',function(){
        return 'prefix';
    });
});
Route::get('/login',function(){
    return view('login');
})->middleware('CheckAge');
// Route::redirect('/admin','admin/users');
// Route::middleware(['CheckAge'])->group(function(){
//     Route::get('/login',function(){
//         return view('login');
//     });
    
// });


