@extends('layout')

@section('content')
<div class="mb-6" style="border-bottom: 2px solid #ff6600; padding-bottom: 10px;">
    <h1>Student Profile</h1>
    <p>View detailed information of the student</p>
</div>

<div class="mb-4">
    <x-action-buttons>
        <a href="{{ route('students.index') }}" class="btn btn-outline">[← Back to Student List]</a>
    </x-action-buttons>
</div>

<div class="box">
    <div style="background-color: #ff6600; color: #fff; padding: 20px; margin-bottom: 20px;">
        <div style="display: flex; align-items: center; gap: 20px;">
            <div style="width: 80px; height: 80px; background-color: #fff; color: #ff6600; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px;">
                JM
            </div>
            <div>
                <h2 style="margin: 0;">Joshua Carl Mendoza</h2>
                <p style="margin: 5px 0;">Student ID: 2024-001</p>
                <span>BSIT - 2nd Year</span>
            </div>
        </div>
    </div>

    <div class="grid">
        <div>
            <h4 style="border-bottom: 2px solid #ff6600; padding-bottom: 5px;">Personal Information</h4>
            
            <p><strong>Email:</strong> joshua.carl@email.com</p>
            <p><strong>Phone:</strong> 0912 345 6789</p>
            <p><strong>Address:</strong> 123 Main Street, Barangay San Jose, Quezon City, Metro Manila, Philippines</p>
        </div>
        
        <div>
            <h4 style="border-bottom: 2px solid #ff6600; padding-bottom: 5px;">Academic Information</h4>
            
            <p><strong>Course:</strong> BS Information Technology</p>
            <p><strong>Year Level:</strong> 2nd Year</p>
            <p><strong>Status:</strong> Active</p>
            <p><strong>Enrollment Date:</strong> August 15, 2024</p>
        </div>
    </div>

    <div class="mt-6" style="border-top: 2px solid #ff6600; padding-top: 20px;">
        <x-action-buttons>
            <a href="{{ route('students.index') }}" class="btn btn-outline">[← Back to List]</a>
            <a href="{{ route('students.edit', 1) }}" class="btn">[✏️ Edit Profile]</a>
            <x-delete-form :studentId="1" />
        </x-action-buttons>
    </div>
</div>
@endsection

