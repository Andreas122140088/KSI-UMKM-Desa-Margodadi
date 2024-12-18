<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between"> 
                        <h1 class="mb-0">List Product</h1>
                        <p><a href="{{ route('admin/products/create') }}" class="btn btn-primary">Add Product</a></p>
                    </div>
                    <hr />
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Whatsapp Link</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $product->title }}</td>
                                <td class="align-middle">{{ $product->category }}</td>
                                <td class="align-middle">{{ $product->price }}</td>
                                <td class="align-middle">{{ $product->description }}</td>
                                <td class="align-middle">
                                    @if($product->whatsapp)
                                    <a href="https://wa.me/{{ $product->whatsapp }}" target="_blank">Chat via WhatsApp</a>
                                    @else
                                        <span>No WhatsApp</span>
                                    @endif
                                </td>
                                <td class="align-middle">
                                    @if($product->image_url)
                                    <img src="{{ Storage::url($product->image_url) }}" alt="Product Image" width="100" height="100">
                                    @else
                                    <span>No Image</span>
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <a href="{{ route('admin/products/edit', $product->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('admin/products/delete', $product->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">No products found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
