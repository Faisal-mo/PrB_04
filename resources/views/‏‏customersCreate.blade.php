@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<h1>Add New Customer</h1>

<form action="/customers" method="POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
    </div>
    <button type="submit">Submit</button>
</form>
