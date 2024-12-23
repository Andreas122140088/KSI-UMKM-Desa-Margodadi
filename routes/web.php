<?php
 
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\StatisticsController;
use App\Models\Product;

Route::get('/', function () {
    $products=Product::all();
    return view('home')->with('products',$products);
});

Route::get('/home', function () {
    $products = Product::orderBy('created_at', 'desc')->take(5)->get();
    return view('home')->with('products', $products);
});

Route::get('/product', function () {
    $products=Product::all();
    return view('home2')->with('products',$products);
});

Route::get('/about', function () {  
    return view('about');
});

Route::get('/product/{id}', function ($id) {
    $product=Product::find($id);
    return view('product')->with('product',$product);;
});

Route::get('/contact', function () {
    return view('contact');
});
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
Route::middleware(['auth', 'admin'])->group(function () {
 
    Route::get('admin/dashboard', [HomeController::class, 'index']);
 
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/save', [ProductController::class, 'save'])->name('admin/products/save');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::get('/admin/products/delete/{id}', [ProductController::class, 'delete'])->name('admin/products/delete');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/statistics', [StatisticsController::class, 'index'])->name('admin/statistics/index');
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
});

Route::get('/admin/statistics', [StatisticsController::class, 'index'])->name('admin/statistics/index');
Route::get('/record-visit', [StatisticsController::class, 'recordVisit']);

require __DIR__.'/auth.php';
