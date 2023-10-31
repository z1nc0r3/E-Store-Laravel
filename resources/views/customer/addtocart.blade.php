{{ session()->put('current', 'order') }}
@include('components/customerheader')

<body>
	<div class="d-flex flex-column align-items-center justify-content-center">
		<table class="table table-striped table-bordered mt-4" style="width: 50%">
         <thead class="thead-dark">
				<tr>
					<th>Name</th>
                    <td>{{$product['name']}}</td>
				</tr>
                <tr>
                    <th>Description</th>
                    <td>{{$product['detail']}}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{$product['price']}}</td>
                </tr>
                <tr>
                    <th>Courrier</th>
                    <th></th>
                </tr>
			</thead>
		</table>
        <a href="{{url('customer/order')}}" class="btn btn-secondary">Go Back</a>
	</div>
