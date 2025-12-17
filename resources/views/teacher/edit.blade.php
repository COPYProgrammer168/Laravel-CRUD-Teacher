@extends('layouts.app')
@section('title', 'Edit Product')
@section('content')
<form method="POST" action="{{ route('teachers.update', $teacher->tid) }}" class="row g-3 needs-validation">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="nameText" class="form-label">Full Name</label>
    <input type="text" value="{{ $teacher->full_name }}" name="full_name" id="nameText" class="form-control"
      placeholder="Enter Full Name">
  </div>
  <div class="mb-3">
    <label for="genderText" class="form-label">Gender</label>
    <select name="gender" id="genderText" class="form-control">
      <option value="">Select Gender</option>
      <option value="1" {{ $teacher->gender == '1' ? 'selected' : '' }}>Male</option>
      <option value="0" {{ $teacher->gender == '0' ? 'selected' : '' }}>Female</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="degreeText" class="form-label">Degree</label>
    <select name="degree" id="degreeText" class="form-control">
      <option value="">Select Degree</option>
      <option value="Bachelor" {{ $teacher->degree == 'Bachelor' ? 'selected' : '' }}>Bachelor</option>
      <option value="Master" {{ $teacher->degree == 'Master' ? 'selected' : '' }}>Master</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="telText" class="form-label">Tel</label>
    <input type="text" value="{{ $teacher->tel }}" name="tel" id="telText" class="form-control"
      placeholder="Enter Tel">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">UPDATE</button>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
  </div>
</form>

@endsection
