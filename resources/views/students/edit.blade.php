 <h2>Edit Student</h2>
 <form method="POST" action="{{ route('students.update', $student->sid) }}">
     @csrf @method('PUT')
     <input name="name" value="{{ $student->name }}" required>
     <button type="submit">Update</button>
 </form>
