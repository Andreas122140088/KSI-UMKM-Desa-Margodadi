<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
 
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.product.home' , compact(['products' , 'total']));
    }
 
    public function create()
    {
        return view('admin.product.create');
    }

    public function save(Request $request)
    {

        $validation = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
    
        // Upload Image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $validation['image_url'] = str_replace('public/', 'storage/', $imagePath); // Update path
        }
        
        $data = Product::create($validation);
        if ($data) {
            session()->flash('success', 'Product Add Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin.products/create'));
        }
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.product.update', compact('products'));
    }
    

    public function update(Request $request, $id)
{
    // Validasi inputan
    $request->validate([
        'title' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',  // Validasi gambar
    ]);

    // Mencari produk berdasarkan ID
    $product = Product::findOrFail($id);

    // Menyimpan data lainnya
    $product->title = $request->title;
    $product->category = $request->category;
    $product->price = $request->price;
    $product->description = $request->description;

    // Mengecek apakah gambar baru diunggah
    if ($request->hasFile('image')) {
        // Menghapus gambar lama jika ada
        if ($product->image_url) {
            Storage::delete($product->image_url);
        }
        
        // Menyimpan gambar baru
        $path = $request->file('image')->store('public/img');
        $product->image_url = $path;  // Menyimpan path gambar baru
    }

    // Menyimpan data produk
    $data = $product->save();

    // Memberikan pesan sukses atau gagal
    if ($data) {
        session()->flash('success', 'Product updated successfully');
        return redirect(route('admin/products'));
    } else {
        session()->flash('error', 'Some problem occurred');
        return redirect(route('admin/products/update', $id));
    }
}

    public function delete($id)
    {
        $products = Product::findOrFail($id)->delete();
        if ($products) {
            session()->flash('success', 'Product Deleted Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Product Not Delete successfully');
            return redirect(route('admin/products'));
        }
    }

}