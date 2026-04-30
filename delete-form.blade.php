<form action="{{ route('students.destroy', $studentId) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student? This action cannot be undone.');" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn" style="background-color: #dc3545; border-color: #dc3545;">
        [🗑️ Delete]
    </button>
</form>

