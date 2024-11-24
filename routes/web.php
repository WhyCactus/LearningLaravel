<?php
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// route::get('test', function () {
//     return "Test URL website";
// });
// Route::get("/test-controller", [TestController::class, 'index']);

// route::get('posts', function () {
//     $posts = DB::table('posts')
//         ->select('title', 'content')
//         ->get();

// Lấy dữ liệu có điều kiện =
// $posts = DB::table('posts')
//     ->where('category_id', 1)
//     ->get();

// Lấy dữ liệu cố điều kiện >
// $posts = DB::table('posts')
//     ->where('id', '>', 80)
//     ->get();

//Lấy dữ liệu theo điều kiện LIKE
// $posts = DB::table('posts')
//     ->where('title', 'LIKE', '%' . 'Accusantium' . '%')
//     ->get();

//Nối 2 bảng posts và categories
//     $posts = DB::table('posts')
//         ->join('categories', 'posts.category_id', '=', 'categories.id')
//         ->get();
//     return $posts;
// });

// route::get('post/{id}', function ($id) {
//     $posts = DB::table('posts')
//         ->where('id', $id)
//         ->first();
//     return $posts;
// });

// Route::get('/', [PostController::class, 'home'])->name('page.home');
Route::get('/category/{id}', [PostController::class, 'list'])->name('page.list');
Route::get('/post/{id}', [PostController::class, 'detail'])->name('page.detail');

// route::get('/', [BookController::class, 'listbook'])->name('page.listbook');
route::get('/', [BookController::class, 'index'])->name('book.index');
Route::get('/create', [BookController::class, 'create'])->name('book.create');
Route::post('/create', [BookController::class, 'store'])->name('book.store');
Route::get('/edit/{$id}', [BookController::class, 'edit'])->name('book.edit');
Route::put('/edit/{$id}', [BookController::class, 'update'])->name('book.update');
Route::delete('/delete/{$id}', [BookController::class, 'destroy'])->name('book.destroy');
// Route::get('/book/{id}', [BookController::class, 'bookdetail'])->name('page.book-detail');

// Route::get('/post-test', [PostController::class, 'index'])->name('post');

//Admin
Route::prefix('admin')->group(function () {
    Route::get('post', [AdminPostController::class, 'index'])->name('admin.post');
});

route::get('/css22', function () {
    return view('test');
});
