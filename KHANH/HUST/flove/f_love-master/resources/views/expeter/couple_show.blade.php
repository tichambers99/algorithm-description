<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FLove</title>

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
 <section id="service" class="home-section text-center bg-gray">

    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Result</h2>
                <i class="fa fa-2x fa-angle-down"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- end heading-about --}}

    <div class="container">
      <div class="row" id="tieu_chi" style="color:black;font-size:20px">
        <div class="col-md-3 text-left" style="font-family: tahoma; font-weight:700;color:gray;">
          YOUR SELECTIONS:
        </div>
       <div class="col-md-6 text-left">
        <div class="form-check">
          <label class="form-check-label" style="padding-right:20px;">
            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>Age
          </label>
          <label class="form-check-label" style="padding-right:20px;">
            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" >Hobby
          </label>
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">Address
          </label>
        </div>
       </div>
       <div class="col-md-3">
         <button type="submit" id="check_result" class="btn btn-primary" style="margin-left:200px">GET</button>
       </div>
       
      </div>
      {{-- end_tieu_chi --}}
      
      <div class="row" id="ket_qua" style="margin-top:30px">
        <div class="col-md-12">
          <div id= "result_navbar" style="color:black; margin:auto;padding:10px; font-size:20px;opacity:0;">
        </div>
        <div class="col-md-12">
          <div id="f_love_cmt" style="text-align:center;color:black;padding-top:5px;"></div>
        </div>
        
      </div>
      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row">
      <div class="col-md-6">
          <div class="wow fadeInLeft" data-wow-delay="0.2s">
            <div class="service-box" >
              <div class="service-icon">
                <img  src="source/img/expeter/1.jpg" alt="" />
              </div>
              <div class="service-desc">
                <a  href="#" style="color:gray;font-size:25px;font-weight:700">Lợi soái ca</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon">
                <img  src="source/img/expeter/2.jpg" alt="" />
              </div>
              <div class="service-desc">
                <a href="#" style="color:gray;font-size:25px;font-weight:700;" >Các em gái</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: services -->
  {{-- footer --}}
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
  <script src="source/js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="source/js/custom.js"></script>
  <script src="source/contactform/contactform.js"></script>

  {{-- my script --}}
  <script>
        var get_value = document.getElementById("check_result");
        var content = document.getElementById("result_navbar");
        var cmt = document.getElementById("f_love_cmt");
        get_value.onclick =  function(){
          content.innerHTML = '100%';
          cmt.innerHTML = 'Cac ban sinh ra la de cho nhau';
          content.style.width = '700px';
          content.style.opacity = '1';
          content.style.backgroundColor = 'aqua';
          content.style.fontWeight = '900';
        }
  </script>

</body>

</html>
