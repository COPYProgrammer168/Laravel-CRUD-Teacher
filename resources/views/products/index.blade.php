@extends('layouts.app')
@section('title', 'Product List')
@section('content')
    <div class="my-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create New</a>
    </div>
    <table class="table table-hover table-dark">
        <thead class="table-primary">
            <th>PID</th>
            <th>Title</th>
            <th>Qty</th>
            <th>Price</th>
            <th>In Stock</th>
            <th>Actions</th>
        </thead>
        <tbody class="table-dark">
            @foreach ($products as $product)
                <tr>
                    <td class="col-1">{{ $product->pid }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if ($product->in_stock == 1)
                            <span class="badge bg-primary">In Stock</span>
                        @else
                            <span class="badge bg-danger">No Stock</span>
                        @endif
                    </td>
                    <td class="col-3">
                        <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                        data-bs-target="#customerModal{{ $product->pid }}">View</button>
                    <div class="modal fade" id="customerModal{{ $product->pid }}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{ $product->title }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>QTY:</strong> {{ $product->qty }}</p>
                                    <p><strong>Price:</strong> {{ $product->price }}</p>
                                    <p><strong>In Stock:</strong> {{ $product->in_stock}}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                        <a href="{{ route('products.edit', $product->pid) }}" class="btn btn-info">Edit</a>
                        <form method="POST" action="{{ route('products.destroy', $product->pid) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links('pagination::bootstrap-5') }}
@endsection
