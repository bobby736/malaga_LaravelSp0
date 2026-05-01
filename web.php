<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Home Route
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
*/

Route::prefix('students')->name('students.')->group(function () {

    // List all students
    Route::get('/', function () {
        return view('students.index');
    })->name('index');

    // Show create form
    Route::get('/create', function () {
        return view('students.create');
    })->name('create');

    // Store new student
    Route::post('/', function () {
        return redirect()
            ->route('students.index')
            ->with('success', 'Student added successfully!');
    })->name('store');

    // Show single student
    Route::get('/{id}', function ($id) {
        return view('students.show', compact('id'));
    })->name('show');

    // Edit student form
    Route::get('/{id}/edit', function ($id) {
        return view('students.edit', compact('id'));
    })->name('edit');

    // Update student
    Route::put('/{id}', function ($id) {
        return redirect()
            ->route('students.show', $id)
            ->with('success', 'Student updated successfully!');
    })->name('update');

    // Delete student
    Route::delete('/{id}', function ($id) {
        return redirect()
            ->route('students.index')
            ->with('success', 'Student deleted successfully!');
    })->name('destroy');

});

