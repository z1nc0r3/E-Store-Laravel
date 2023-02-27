{{session() -> put('current', 'products')}}
@include('components/adminheader')

<body>
    <div class="container align-items-center justify-content-center h-75 w-50 mt-5">
        <p class="text-center h3 mb-4">Update product - {{$product['name']}}</p>
        <form action="{{ url('admin/updateproduct/check') }}" method="post">
			@csrf
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control mt-2 mb-3" name="name" value="{{$product['name']}}" required>
			</div>
			<div class="form-group">
				<label>Details</label>
				<textarea rows=10 type="text" class="form-control mt-2 mb-3" name="detail" required>{{$product['detail']}}</textarea>
			</div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control mt-2 mb-3" name="price" value="{{$product['price']}}" required>
            </div>
            <input type="hidden" name="id" value="{{$product['id']}}">
			<button type="submit" class="btn btn-primary w-100">Update Product</button>
		</form>
    </div>