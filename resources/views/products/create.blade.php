@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-8 p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-6">Add New Product</h1>

    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block font-medium">Product Name</label>
            <input type="text" name="name" value="{{ old('name') }}"
                class="w-full border rounded p-2 mt-1" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Category</label>
            <input type="text" name="category" value="{{ old('category') }}"
                class="w-full border rounded p-2 mt-1" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Description</label>
            <textarea name="description" class="w-full border rounded p-2 mt-1" required>{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Price ($)</label>
            <input type="number" name="price" step="0.01" value="{{ old('price') }}"
                class="w-full border rounded p-2 mt-1" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Stock Quantity</label>
            <input type="number" name="stock_quantity" value="{{ old('stock_quantity') }}"
                class="w-full border rounded p-2 mt-1" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Product Image</label>
            <input type="file" name="image" class="w-full mt-1">
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                Save Product
            </button>
            <a href="{{ route('products.index') }}" class="ml-4 text-gray-600 hover:underline">Cancel</a>
        </div>
    </form>
</div>
@endsection
