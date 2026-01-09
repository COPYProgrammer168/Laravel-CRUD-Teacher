@extends('layouts.app')
{{-- @section('title', 'Edit Appointment') --}}
@section('content')
    <div class="container mt-4 ">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Edit Appointment</h4>
                    </div>

                    <div class="card-body p-4 bg-dark text-white">
                        <form method="POST" action="{{ route('appointments.update', $appointment->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="customer_id" class="form-label fw-bold">Customer</label>
                                <select name="customer_id" class="form-select form-select-lg" id="customer_id" required>
                                    <option disabled>Choose a Customer</option>
                                    @foreach ($customers as $item)
                                        <option value="{{ $item->id }}" @selected($item->id === $appointment->customer_id)>{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="service_id" class="form-label fw-bold">Service</label>
                                <select name="service_id" class="form-select form-select-lg" id="service_id" required>
                                    <option disabled>Choose a Service</option>
                                    @foreach ($services as $item)
                                        <option value="{{ $item->id }}" @selected($item->id === $appointment->service_id)>{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="appointment_time" class="form-label fw-bold">Appointment Time</label>
                                <input type="datetime-local" name="appointment_time" id="appointment_time"
                                    class="form-control form-control-lg" value="{{ $appointment->appointment_time }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="status" class="form-label fw-bold">Status</label>
                                <select name="status" class="form-select form-select-lg" id="status" required>
                                    <option disabled>Choose a Status</option>
                                    <option value="pending" @selected($appointment->status === 'pending')>Pending</option>
                                    <option value="confirmed" @selected($appointment->status === 'confirmed')>Confirmed</option>
                                    <option value="cancelled" @selected($appointment->status === 'cancelled')>Cancelled</option>
                                </select>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button href="{{ route('appointments.index') }}" type="submit"
                                    class="btn btn-primary btn-lg">Update Appointment</button>
                                <a href="{{ route('appointments.index') }}" class="btn btn-secondary btn-lg">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
