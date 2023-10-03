<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// se puede hacer así

Route::view('/', 'welcome');
// Route::get('/', function () {
//     return view('welcome');
// });







// devolver la pagina contacto
Route::view('/contact', 'contact')->name('contacto');

// devolver la pagina blog
// Route::get('/blog', 'blog', ['posts'=>$posts])->name('blog');
// Route::get('/blog', [PostController::class, 'index'])->name('post.index');
// Route::get('/blog/create',[PostController::class, 'create'])->name('post.create');
// Route::post('/blog',[PostController::class, 'store'])->name('post.store');
// Route::get('/blog/{post}',[PostController::class, 'show'])->name('post.show');
// Route::get('/blog/{post}/edit',[PostController::class, 'edit'])->name('post.edit');
// Route::patch('/blog/{post}',[PostController::class, 'update'])->name('post.update');
// Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('post.destroy');


Route::resource('blog',PostController::class,[
    'names'=> 'post',
    'parameters'=>['blog'=>'post']
]);

// devolver la pagina about
Route::view('/about', 'about')->name('about');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
