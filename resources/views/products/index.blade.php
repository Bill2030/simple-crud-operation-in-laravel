<x-layout>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4 class="text-center">Products List</h4></div>
                <div class="card-body">
                    <table class="table">
                        <a class="btn btn-success btn-sm" style="float-right" href="{{ route('products.create') }}">Create Product</a>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Products Name</th>
                                <th>Products Description</th>
                                <th>Products Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product )
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ Number::currency($product->price, 'KES') }}</td>
                                    <td>
                                        <div class="btn-group">
                                        <a class="btn btn-primary btn-sm" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                        <a class="btn btn-success btn-sm" href="{{ route('products.show', $product->id) }}">Show</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are you sure you want to delete the item ?')" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layout>
