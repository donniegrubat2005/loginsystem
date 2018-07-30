
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>

@if (isset(Auth::user()->username))
	<div class="alert alert-danger success-block">
		<strong> Welcome {{Auth::user()->username}} </strong>

		<a href="{{ url('login/logout')}}">Logout</a>
	</div>
	@else
	<script>window.location="/";</script>
@endif
</body>
</html>