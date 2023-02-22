<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Login</title>
	<link rel="stylesheet" href="{{ url('assets/css/register.css') }}">
</head>

<body>
	<div class="container d-flex flex-column">

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form action="{{ url('/register/check') }}" method="post">
			@csrf
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control mt-2 mb-3" name="name" placeholder="Enter name" value="{{old('name')}}">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control mt-2 mb-3" name="email" placeholder="Enter email" value="{{old('email')}}"">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" class="form-control mt-2 mb-3" name="address" placeholder="Enter address" value="{{old('address')}}"">
			</div>
			<div class="form-group mb-3">
				<lable>Gender</lable>
				<select class="form-select" name="gender">
					<option selected>Select a gender</option>
					<option value="male">Male</option>
					<option vlaue="female">Female</option>
				</select>
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="number" class="form-control mt-2 mb-3" name="mobile" placeholder="Enter mobile" value="{{old('mobile')}}"">
			</div>
			<div class="form-group mt-3">
				<label>Password</label>
				<input type="password" class="form-control mt-2 mb-3" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<input type="hidden" class="form-control mt-2 mb-3" name="role" value="customer">
			</div>
			<button type="submit" class="btn btn-primary w-100">Register</button>
		</form>
	</div>
</body>

</html>
