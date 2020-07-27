<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FLove - Expeter</title>

  <!-- Bootstrap Core CSS -->
  <link href="source/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- Fonts -->
  <link href="source/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="source/css/animate.css" rel="stylesheet" />
  <!-- Squad theme CSS -->
  <link href="source/css/style.css" rel="stylesheet">
  <link href="source/color/default.css" rel="stylesheet">
  <!-- FaTeam css -->
  
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>
  @include('expeter.head_expeter')
   <!-- Section: services -->
 
  @include('expeter.table')
<!-- /Section: services -->
  <div class="container_fluid bg-gray">
    <div class="row text-center" style="padding-bottom: 30px">
    <a name="" id="get_two_user" class="btn btn-success" type="submit"  href="{{route('expeter_result.index')}}" onclick="return checked_all()">View_result</a>
  </div>
  <div class="row text-center" style="padding-bottom: 30px">
    <div id="show_errors"></div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="wow shake" data-wow-delay="0.4s">
            <div class="page-scroll marginbot-30">
              <a href="#intro" id="totop" class="btn btn-circle">
              <i class="fa fa-angle-double-up animated"></i>
            </a>
            </div>
          </div>
          <p>&copy;FLove! OnLy Love</p>
          <div class="credits">
            Designed by <a href="https://www.facebook.com/uninkute.can" target="_blank">LoiIn</a>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Core JavaScript Files -->
  <script src="source/js/jquery.min.js"></script>
  <script src="source/js/bootstrap.min.js"></script>
  <script src="source/js/jquery.easing.min.js"></script>
  <script src="source/js/jquery.scrollTo.js"></script>
  <script src="source/js/expeter.js"></script>
  <script src="source/js/me.js"></script>
  <script src="source/js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="source/js/custom.js"></script>
  <script src="source/contactform/contactform.js"></script>

  {{-- admin_css --}}

  <!-- Custom scripts for all pages-->
  <script src="source/login/js/sb-admin.min.js"></script>
  <script src="source/login/vendor/jquery/jquery.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="source/login/js/demo/datatables-demo.js"></script>

  <script src="source/login/vendor/datatables/jquery.dataTables.js"></script>
  <script src="source/login/vendor/datatables/dataTables.bootstrap4.js"></script>

</body>

</html>
