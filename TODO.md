# Task Plan: Blade Inheritance & Component Refactoring

## Completed Tasks:

### ✅ 1. Create Blade Components
- [x] Create `resources/views/components/action-buttons.blade.php` - For View, Edit, Delete buttons
- [x] Create `resources/views/components/delete-form.blade.php` - For delete form with confirmation

### ✅ 2. Update Student Views
- [x] Update `resources/views/students/index.blade.php` - Add delete functionality using components
- [x] Update `resources/views/students/show.blade.php` - Add delete button using components
- [x] Update `resources/views/students/edit.blade.php` - Use action-buttons component for navigation
- [x] Update `resources/views/students/create.blade.php` - Use action-buttons component for navigation

### ✅ 3. Fix welcome.blade.php
- [x] Update to use layout inheritance instead of standalone HTML

### ✅ 4. Add DELETE Route
- [x] Added `Route::delete('/{id}')` route in `web.php` for student deletion

## Summary:
- All views now use `layout.blade.php` for consistent sidebar
- Created reusable blade components: `action-buttons` and `delete-form`
- Added delete functionality with confirmation prompt
- Refactored action buttons to use components

