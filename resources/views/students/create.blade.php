@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Add New Student</h3>
            <a href="{{ route('students.index') }}" class="btn btn-light btn-sm">
                <i class="bi bi-arrow-left-circle"></i> Back
            </a>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('students.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="student_id" class="form-label fw-semibold">Student ID</label>
                    <input type="text" class="form-control" id="student_id" name="student_id" placeholder="Enter Student ID" required>
                </div>

                <div class="mb-3">
                    <label for="fullname" class="form-label fw-semibold">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Full Name" required>
                </div>

                <div class="mb-3">
                    <label for="course" class="form-label fw-semibold">Course</label>
                    <input type="text" class="form-control" id="course" name="course" placeholder="Enter Course" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                </div>

                <div class="mb-3">
                    <label for="contact_number" class="form-label fw-semibold">Contact Number</label>
                    <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number" required>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Add Student
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
