
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="sample login system laravel">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Login System</title>

  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">


</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-3">

        @if (isset(Auth::user()->username))
         <script>window.location="login/validate_success";</script>
        @endif
       
        @if ($message=Session::get('error'))
          <div class=" alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong> {{$message}} </strong>
          </div>
        @endif

        @if (count($errors) >0)
        <div class=" alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li> {{$error}} </li>
            @endforeach
          </ul>
        </div>
        @endif

        <form class="form-signin" method="post" action="{{ url('login/validate_login') }}">
          {{ csrf_field() }}
          <h2 class="form-signin-heading">Please sign in</h2>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="text" id="username"  name="username" class="form-control" placeholder="Username">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
      </div>
    </div>
  </div> 

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>
