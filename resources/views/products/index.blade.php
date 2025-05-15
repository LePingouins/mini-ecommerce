@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Product List</h1>

    <a href="{{ route('products.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
        Add Product
    </a>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
        @foreach($products as $product)
            <div class="border p-4 rounded shadow">
                <h2 class="text-lg font-semibold">{{ $product->name }}</h2>
                <p class="text-sm text-gray-500">{{ $product->category }}</p>
                <p class="mt-2 font-bold">${{ $product->price }}</p>

                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-40 object-cover mt-2">
                @endif

                <p class="text-sm mt-2">Stock: {{ $product->stock_quantity }}</p>

                <div class="flex justify-between mt-4">
                    <a href="{{ route('products.edit', $product) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form method="POST" action="{{ route('products.destroy', $product) }}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500 hover:underline" onclick="return confirm('Delete this product?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
