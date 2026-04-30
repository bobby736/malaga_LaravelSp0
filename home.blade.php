@extends('layout')

@section('content')
<div style="border-bottom: 2px solid #ff6600; margin-bottom: 30px; padding-bottom: 10px;">
    <h1>Welcome to the Student Portal</h1>
</div>

<div class="box">
    <h3>📌 About This System</h3>
    <p>A comprehensive system designed to manage student information efficiently. 
    Track student records, manage academic data, and streamline administrative tasks 
    all in one place.</p>
</div>

<div class="grid">
    <div class="box">
        <h3>📋 Student Management</h3>
        <p>Easily add, view, edit, and manage student records with our intuitive interface.</p>
    </div>
    <div class="box">
        <h3>📊 Data Organization</h3>
        <p>Keep all student information organized with structured data fields and easy navigation.</p>
    </div>
    <div class="box">
        <h3>⚡ Quick Access</h3>
        <p>Quickly access and update student information whenever needed.</p>
    </div>
</div>

<div class="box">
    <h3>🚀 Quick Actions</h3>
    <div class="quick-links">
        <a href="{{ route('students.index') }}" class="btn">[📋 View Student List]</a>
        <a href="{{ route('students.create') }}" class="btn">[➕ Add New Student]</a>
    </div>
</div>

<div class="grid">
    <div class="box text-center">
        <h2 style="font-size: 2em; color: #ff6600;">150+</h2>
        <p>Active Students</p>
    </div>
    <div class="box text-center">
        <h2 style="font-size: 2em; color: #ff6600;">5</h2>
        <p>Courses</p>
    </div>
    <div class="box text-center">
        <h2 style="font-size: 2em; color: #ff6600;">4</h2>
        <p>Year Levels</p>
    </div>
    <div class="box text-center">
        <h2 style="font-size: 2em; color: #ff6600;">25+</h2>
        <p>Faculty Members</p>
    </div>
</div>
@endsection

