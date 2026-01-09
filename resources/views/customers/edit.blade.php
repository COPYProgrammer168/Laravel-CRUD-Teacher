@extends('layouts.layout')
@section('title', 'Edit Customer')
@section('content')
    <form action="{{ route('customers.update', $customer) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $customer->name }}" class="form-control mb-2" placeholder="Name" required>
        <input type="email" name="email" value="{{ $customer->email }}" class="form-control mb-2" placeholder="Email"
            required>
        <input type="text" name="phone" value="{{ $customer->phone }}" class="form-control mb-2" placeholder="Phone"
            required>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
