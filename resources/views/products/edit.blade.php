@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-8 p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-6">Edit Product</h1>

    <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-medium">Product Name</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}"
                class="w-full border rounded p-2 mt-1" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Category</label>
            <input type="text" name="category" value="{{ old('category', $product->category) }}"
                class="w-full border rounded p-2 mt-1" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Description</label>
            <textarea name="description" class="w-full border rounded p-2 mt-1" required>{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Price ($)</label>
            <input type="number" name="price" step="0.01" value="{{ old('price', $product->price) }}"
                class="w-full border rounded p-2 mt-1" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Stock Quantity</label>
            <input type="number" name="stock_quantity" value="{{ old('stock_quantity', $product->stock_quantity) }}"
                class="w-full border rounded p-2 mt-1" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Change Product Image</label>
            <input type="file" name="image" class="w-full mt-1">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="w-32 h-32 object-cover mt-2 rounded">
            @endif
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                Update Product
            </button>
            <a href="{{ route('products.index') }}" class="ml-4 text-gray-600 hover:underline">Cancel</a>
        </div>
    </form>
</div>
@endsection
