<?php

use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Routing\Route as RoutingRoute;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'nama' => 'Annajm Albupy',
        'email' => 'albupyanajm83@gmail.com'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
        'active' => 'category',
        'categories' => Category::all()
    ]);
});

Route::get('/posts/{post:slug}', [PostController::class, 'view']);


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Category: $category->name",
        'active' => 'category',
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Author by: $author->name",
        'active' => 'author',
        'posts' => $author->posts->load('category', 'author'),
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::get('/dashboard/posts/coba', [DashboardPostController::class, 'coba']);

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
