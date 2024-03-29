{{ session()->put('current', 'order') }}
@include('components/customerheader')

<body>
	<div class="d-flex flex-column align-items-center justify-content-center">
		<table class="table table-striped table-bordered mt-4" style="width: 90%">
         <thead class="thead-dark">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Details</th>
					<th scope="col">Price</th>
               <th scope="col" style="width: 130px">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($products as $row)
					<tr>
						<td><strong>{{ $row['id'] }}</strong></td>
						<td>{{ $row['name'] }}</td>
						<td>{{ $row['detail'] }}</td>
						<td>{{ $row['price'] }}</td>
                  <td>
                     <a href="{{ route('customer.addtocart', $row['id'])}}" class="btn btn-success">Add to Cart</a>
                  </td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
