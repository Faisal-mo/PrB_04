@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Services</h1>

        @if($services->isEmpty())
            <p>No services found.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->description }}</td>
                            <td>
                                @if($service->image)
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="Service Image" style="max-width: 100px;">
                                @else
                                    No image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('servicesEdit', $service->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('servicesDestroy', $service->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{ route('servicesCreate') }}" class="btn btn-success">Add New Service</a>
    </div>
</body>
</html>
