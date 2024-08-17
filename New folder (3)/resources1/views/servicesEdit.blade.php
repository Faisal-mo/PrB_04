<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Service</h1>

        <form action="{{ route('servicesUpdate', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $service->title }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $service->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" alt="Service Image" style="max-width: 200px;">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Service</button>
        </form>

        <a href="{{ route('servicesIndex') }}" class="btn btn-secondary">Back to Services</a>
    </div>
</body>
</html>
