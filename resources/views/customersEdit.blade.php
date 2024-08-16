@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer information</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Customer information</h1>
        
        <form action="{{ route('customersUpdate', $customer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $customer->title }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $customer->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @if($customer->image)
                    <img src="{{ asset('storage/' . $customer->image) }}" alt="Customer Image" style="max-width: 200px;">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Customer</button>
        </form>
    </div>
</body>
</html>
