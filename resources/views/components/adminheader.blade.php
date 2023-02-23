<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
	<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
		<div class="container-fluid">
			<a class="navbar-brand">Admin Dashboard</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse d-flex flex-row justify-content-between" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link {{(session() -> get('current') == 'dashboard') ? 'active' : ''}}" aria-current="page" href="{{url('/admin/dashboard')}}">Dashboard</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{(session() -> get('current') == 'products') ? 'active' : ''}}" href="{{url('/admin/products')}}">Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{(session() -> get('current') == 'employees') ? 'active' : ''}}" href="{{url('/admin/empoloyee')}}">Employees</a>
					</li>
				</ul>
                <div>
                    <a href="{{url('/logout')}}" class="btn btn-danger">Logout</a>
                </div>
			</div>
		</div>
	</nav>
