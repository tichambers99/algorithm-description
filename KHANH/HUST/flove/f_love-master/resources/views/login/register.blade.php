<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="source/login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="source/login/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
     
      <div class="card-header text-center">Register an Account</div>
      <div class="card-body">
        {{-- <form method="post" action="{{ route('postRegister')}}">
          <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" name ="username" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="firstName">User name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control"name="password" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" class="form-control" name="re_password" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
        <a type="submit" class="btn btn-primary btn-block" href="{{route('edit_infor.index')}}">Register</a>
        {{-- </form> --}}
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="source/login/vendor/jquery/jquery.min.js"></script>
  <script src="source/login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="source/login/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
