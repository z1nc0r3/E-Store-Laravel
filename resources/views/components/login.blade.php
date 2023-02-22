<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Login</title>
  <link rel="stylesheet" href="{{url('assets/css/login.css')}}">
</head>

<body>
    <div class="container d-flex flex-column">

      @if (session() -> has('loginError'))
      <div class="alert alert-danger" role="alert">
        {{session() -> get('loginError')}}
      </div>
      @endif

      <form action="{{url('/login/check')}}" method="post">
          @csrf
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control mt-2" name="email" placeholder="Enter email">
          </div>
          <div class="form-group mt-3">
            <label>Password</label>
            <input type="password" class="form-control mt-2" name="password" placeholder="Password">
          </div>
          <div class="form-check mt-4 mb-4">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label">Remember me</label>
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>

</html>
