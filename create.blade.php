@extends('layout')

@section('content')
<div class="mb-6" style="border-bottom: 2px solid #ff6600; padding-bottom: 10px;">
    <h1>Add New Student</h1>
    <p>Fill in the information below to register a new student</p>
</div>

<div class="box">
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        
        <div class="grid">
            <div>
                <label><strong>Student ID:</strong></label>
                <input type="text" name="student_id" placeholder="e.g., 2024-001">
            </div>
            
            <div>
                <label><strong>First Name:</strong></label>
                <input type="text" name="first_name" placeholder="e.g., Juan">
            </div>
            
            <div>
                <label><strong>Last Name:</strong></label>
                <input type="text" name="last_name" placeholder="e.g., Miguel">
            </div>
            
            <div>
                <label><strong>Email Address:</strong></label>
                <input type="email" name="email" placeholder="e.g., juan.miguel@email.com">
            </div>
            
            <div>
                <label><strong>Course:</strong></label>
                <select name="course">
                    <option value="">Select a course</option>
                    <option value="BSIT">BS Information Technology</option>
                    <option value="BSCS">BS Computer Science</option>
                    <option value="BSIS">BS Information Systems</option>
                </select>
            </div>
            
            <div>
                <label><strong>Year Level:</strong></label>
                <select name="year_level">
                    <option value="">Select year level</option>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                </select>
            </div>
            
            <div class="w-full" style="grid-column: 1 / -1;">
                <label><strong>Phone Number:</strong></label>
                <input type="text" name="phone" placeholder="e.g., 0912 345 6789">
            </div>
            
            <div class="w-full" style="grid-column: 1 / -1;">
                <label><strong>Address:</strong></label>
                <textarea name="address" rows="3" placeholder="Enter full address"></textarea>
            </div>
        </div>
        
        <div class="mt-6">
            <x-action-buttons>
                <a href="{{ route('students.index') }}" class="btn btn-outline">[Cancel]</a>
                <button type="submit" class="btn">[Add Student]</button>
            </x-action-buttons>
        </div>
    </form>
</div>
@endsection

