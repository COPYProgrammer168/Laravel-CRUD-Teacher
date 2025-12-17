<h2>Add Student</h2>
<form method="POST" action="{{ route('students.store') }}">
    @csrf
    <input name="name" placeholder="Name" required>
    <button type="submit">Save</button>
</form>
