@extends('layouts.app')
@section('title', 'Teacher List')
@section('content')
    <div class="my-3">
        <a href="{{ route('teachers.create') }}" class="btn btn-primary">Create New</a>
    </div>
    <table class="table table-hover">
        <thead class="table-primary">
            <th>TID</th>
            <th>FULL NAME</th>
            <th>Gender</th>
            <th>Degree</th>
            <th>TEL</th>
            <th>Actions</th>
        </thead>
        <tbody class="table-light">
            @foreach ($teacher as $teachers)
                <tr>
                    <td>{{ $teachers->tid }}</td>
                    <td>{{ $teachers->full_name }}</td>
                    <td>
                        @if ($teachers->gender == 1)
                            <span class="badge bg-primary">Male</span>
                        @else
                            <span class="badge bg-danger">Female</span>
                        @endif
                    </td>
                    <td>{{ $teachers->degree }}</td>
                    <td>{{ $teachers->tel }}</td>
                    <td class="col-3">
                        <a href="{{ route('teachers.show', $teachers->tid) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('teachers.edit', $teachers->tid) }}" class="btn btn-info">Edit</a>
                        <form method="POST" action="{{ route('teachers.destroy', $teachers->tid) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $teacher->links('pagination::bootstrap-5') }}
@endsection
