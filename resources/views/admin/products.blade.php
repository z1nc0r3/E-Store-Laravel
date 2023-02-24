{{ session()->put('current', 'products') }}
@include('components/adminheader')

<body>
	<div class="d-flex align-items-center justify-content-center">
		<table class="table w-75 table-striped table-bordered mt-4">
         <thead class="thead-dark">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Details</th>
					<th scope="col">Price</th>
               <th scope="col">Action</th>
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
                     <a href="{{ route('admin.showproduct', $row['id'])}}" class="btn btn-success">Show</a>
                     <a href="{{ route('admin.addproduct', $row['id']), ['action' => 'edit'] }}" class="btn btn-primary">Edit</a>
                     <a href="{{ route('admin.deleteproduct', $row['id'])}}" class="btn btn-danger">Delete</a>
                  </td>
					</tr>
				@endforeach
			</tbody>
		</table>

	</div>
