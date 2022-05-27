<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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

$links = ['home', 'about', 'contact', 'dashboard'];

Route::redirect('/', '/home');

Route::get(
    '/home',
    fn () => view('home', ['links' => $links, 'name' => 'home'])
)->name('home');

Route::get(
    '/about',
    fn () => view('about', ['links' => $links, 'name' => 'about'])
)->name('about');

Route::get(
    '/contact',
    fn () => view('contact', ['links' => $links, 'name' => 'contact'])
)->name('contact');

Route::get(
    '/dashboard',
    fn () => view('dashboard', ['links' => $links, 'name' => 'dashboard'])
)->name('dashboard');

// Solution 1
Route::get('/example/{a}/{b}/{c}', function ($a, $b, $c) {
    if (is_numeric($a) && is_numeric($b) && is_numeric($c))
        return $a + $b + $c;
    if (!is_numeric($a) && !is_numeric($b) && !is_numeric($c))
        return $a . ' ' . $b . ' ' . $c;
    throw new NotFoundHttpException;
});





/*
Route::redirect('/', '/home');

Route::view('/home', 'welcome', ['title' => 'welcome']);

Route::get('/user/{id}/{name?}', function ($id, $name = null) {
    return view('welcome', compact('id', 'name'));
    // Equal to:
    // return view('welcome', ['id' => $id, 'name' => $name]);
})->where(['name' => '[\/a-z\.-]*']);

Route::get('/admin/{id}', function ($id, $name = null) {
    return view('welcome', compact('id', 'name'));
});

// Route::get('/home', function () {
//     return view('welcome', ['name' => 'Taylor']);
// });

// Route::get('/user', [UserController::class, 'index']);

// Route::get('/dashboard', function () {
//     return response('You are in dashboard page', 200)
//         ->header('Content-Type', 'text/plain');
// });
 */
