@extends('layouts.app')
@section('title', 'Create Product')
@section('content')
<form method="POST" action="{{ route('products.store') }}" class="row g-3 needs-validation">
  @csrf
  <div class="mb-3">
    <label for="titleText" class="form-label">Title</label>
    <input type="text" name="title" id="titleText" class="form-control" placeholder="Enter Title" required>
  </div>
  <div class="mb-3">
    <label for="qtyText" class="form-label">Qty</label>
    <input type="number" min="0" max="1000" name="qty" id="qtyText" class="form-control" placeholder="Enter Qty"
      required>
  </div>
  <div class="mb-3">
    <label for="priceText" class="form-label">Price</label>
    <input type="number" min="0" max="5000" step="0.01" name="price" id="priceText" class="form-control"
      placeholder="Enter Price" required>
  </div>
  <div class="mb-3">
    <label for="in_stockText" class="form-label">In Stock</label>
    <select name="in_stock" id="in_stock" class="form-control" required>
      <option value="">Select Stock</option>
      <option value="1">In Stock</option>
      <option value="0">No Stock</option>
    </select>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
  </div>
</form>
@endsection