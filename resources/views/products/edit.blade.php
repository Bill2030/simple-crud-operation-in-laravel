<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3 class="text-center">Edit Product</h3></div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="name">Product Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="description">Product description</label>
                                <input type="text" name="description" class="form-control" value="{{ $product->description }}">
                            </div>
                            <div class="mb-3">
                                <label for="price">Product Price</label>
                                <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                            </div>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layout>