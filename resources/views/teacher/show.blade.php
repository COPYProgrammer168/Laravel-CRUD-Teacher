@extends('layouts.app')
@section('title', 'Show List Teacher')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0">Teacher Detail</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>TID:</strong> {{ $teacher->tid }}</p>
                        <p><strong>Name:</strong> {{ $teacher->full_name }}</p>
                        <p><strong>Gender:</strong> {{ $teacher->gender }}</p>
                        <p><strong>Degree:</strong> {{ $teacher->degree }}</p>
                        <p><strong>Tel:</strong> {{ $teacher->tel }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
