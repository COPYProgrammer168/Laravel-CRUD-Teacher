@extends('layouts.app')
@section('title', 'Edit Product')
@section('content')
<form method="POST" action="{{ route('products.update', $product->pid) }}" class="row g-3 needs-validation">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="pidText" class="form-label">Product ID</label>
    <input type="text" value="{{ $product->pid }}" readonly name="pid" id="pidText" class="form-control">
  </div>
  <div class="mb-3">
    <label for="titleText" class="form-label">Title</label>
    <input type="text" value="{{ $product->title }}" name="title" id="titleText" class="form-control"
      placeholder="Enter Title">
  </div>
  <div class="mb-3">
    <label for="qtyText" class="form-label">Qty</label>
    <input type="number" min="0" max="1000" value="{{ $product->qty }}" name="qty" id="qtyText" class="form-control"
      placeholder="Enter Qty">
  </div>
  <div class="mb-3">
    <label for="priceText" class="form-label">Price</label>
    <input type="number" min="0" max="1000" step="0.01" value="{{ $product->price }}" name="price" id="priceText"
      class="form-control" placeholder="Enter Price">
  </div>
  <div class="mb-3">
    <label for="in_stockText" class="form-label">In Stock</label>
    <select name="in_stock" id="in_stock" class="form-control" required>
      <option value="">Select Stock</option>
      <option value="1" {{ $product->in_stock == 1 ? 'selected' : '' }}>In Stock</option>
      <option value="0" {{ $product->in_stock == 0 ? 'selected' : '' }}>No Stock</option>
    </select>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">UPDATE</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
  </div>
</form>

@endsection
