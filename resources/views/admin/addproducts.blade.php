{{session() -> put('current', 'products')}}
@include('components/adminheader')

<body>
    <div class="container align-items-center justify-content-center h-75 w-50 mt-5">
        <p class="text-center h3 mb-4">Add new product</p>
        <form action="{{ url('admin/addproducts/check') }}" method="post">
			@csrf
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control mt-2 mb-3" name="name" placeholder="Enter name" value="{{old('name')}}" required>
			</div>
			<div class="form-group">
				<label>Details</label>
				<textarea rows=10 type="text" class="form-control mt-2 mb-3" name="detail" placeholder="Enter details" required>{{old('detail')}}</textarea>
			</div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control mt-2 mb-3" name="price" placeholder="Enter price" value="{{old('price')}}" required>
            </div>
			<button type="submit" class="btn btn-primary w-100">Add Product</button>
		</form>
    </div>
	