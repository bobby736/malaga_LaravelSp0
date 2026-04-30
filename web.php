<?php

use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('home');
})->name('home');

// Student Routes
Route::prefix('students')->name('students.')->group(function () {
    // Student List Page (GET)
    Route::get('/', function () {
        return view('students.index');
    })->name('index');

    // Add Student Page (GET)
    Route::get('/create', function () {
        return view('students.create');
    })->name('create');

    // Add Student Form Submission (POST)
    Route::post('/', function () {
        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    })->name('store');

    // View Student Page (GET)
    Route::get('/{id}', function ($id) {
        return view('students.show', ['id' => $id]);
    })->name('show');

    // Edit Student Page (GET)
    Route::get('/{id}/edit', function ($id) {
        return view('students.edit', ['id' => $id]);
    })->name('edit');

    // Update Student Form Submission (PUT/PATCH)
    Route::put('/{id}', function ($id) {
        return redirect()->route('students.show', $id)->with('success', 'Student updated successfully!');
    })->name('update');

    // Delete Student (DELETE)
    Route::delete('/{id}', function ($id) {
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    })->name('destroy');
});

