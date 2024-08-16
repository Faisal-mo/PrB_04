@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Customers</h1>

        @if($customers->isEmpty())
            <p>No customers found.</p>
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
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->title }}</td>
                            <td>{{ $customer->description }}</td>
                            <td>
                                @if($customer->image)
                                    <img src="{{ asset('storage/' . $customer->image) }}" alt="Customer Image" style="max-width: 100px;">
                                @else
                                    No image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('customersEdit', $customer->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('customersDestroy', $customer->id) }}" method="POST" style="display:inline;">
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

        <a href="{{ route('customersCreate') }}" class="btn btn-success">Add New Customer</a>
    </div>
</body>
</html>
