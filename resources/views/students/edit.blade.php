@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Edit Student</h3>
            <a href="{{ route('students.index') }}" class="btn btn-light btn-sm">
                <i class="bi bi-arrow-left-circle"></i> Back
            </a>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('students.update', $student->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="student_id" class="form-label fw-semibold">Student ID</label>
                    <input type="text" class="form-control" id="student_id" name="student_id"
                           value="{{ $student->student_id }}" required>
                </div>

                <div class="mb-3">
                    <label for="fullname" class="form-label fw-semibold">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname"
                           value="{{ $student->fullname }}" required>
                </div>

                <div class="mb-3">
                    <label for="course" class="form-label fw-semibold">Course</label>
                    <input type="text" class="form-control" id="course" name="course"
                           value="{{ $student->course }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                           value="{{ $student->email }}" required>
                </div>

                <div class="mb-3">
                    <label for="contact_number" class="form-label fw-semibold">Contact Number</label>
                    <input type="text" class="form-control" id="contact_number" name="contact_number"
                           value="{{ $student->contact_number }}" required>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Update Student
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
