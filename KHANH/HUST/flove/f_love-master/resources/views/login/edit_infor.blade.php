<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit_Information</title>

  <!-- Custom fonts for this template-->
  <link href="source/login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="source/login/css/sb-admin.css" rel="stylesheet">

  <!--FaCss-->
  <link rel="stylesheet" href="source/css/FaStyle.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container" style = "margin-top:-50px;">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header text-center">Edit Information</div>
      <div class="card-body">
        <form action="/action_page.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="FullName" class="form-control" placeholder="FullName" required="required" autofocus="autofocus">
                  <label for="FullName">Full Name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="Address" class="form-control" placeholder="Address" required="required" autofocus="autofocus">
                  <label for="Address">Address</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                        <select class="custom-select" name="State" id="state">
                            <option class="love" value="Single">Single</option>
                            <option class="love" value="Dating">Dating</option>
                        </select>
                  </div>
                  <div class="col-md-6">
                        <select class="custom-select" name="Sex" id="sex">
                            <option value="Fe_Male">FeMale</option>
                            <option value="Male">Male</option>
                        </select>
                  </div>
                </div>
            </div>

            <div class="form-group fe_dating">
              <div class="form-row">
                <div class="col-md-6 hide" id="dating_alone">
                    <div class="form-label-group">
                      <input type="text" id="op_user_name" class="form-control" placeholder="op_user_name" required="required">
                      <label for="op_user_name">op_user_name</label>
                    </div>
                </div>
                <div class="col-md-6" id="female">
                    <div class="row">
                        <div class="col-md-4 form-label-group ">
                          <input type="text" id="The_1st" class="form-control" placeholder="The 1st" required="required">
                          <label for="The_1st">The 1st</label>
                        </div>
                      
                        <div class="col-md-4 form-label-group measuares" >
                          <input type="text" id="The_2nd" class="form-control" placeholder="The 2nd" required="required">
                          <label for="The_2nd">The 2nd</label>
                        </div>
                    
                        <div class="col-md-4 form-label-group measuares" >
                          <input type="text" id="The_3rd" class="form-control" placeholder="The 3rd" required="required">
                          <label for="The_3rd">The 3rd</label>
                        </div>
                      </div>
                </div>
              </div>
            </div>

          <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4">
                    <div class="form-label-group">
                      <input type="text" id="Height" class="form-control" placeholder="Height" required="required">
                      <label for="Height">Height</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-label-group">
                        <input type="text" id="Weight" class="form-control" placeholder="Weight" required="required">
                        <label for="Weight">Weight</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                        <label for="dateofbirth" style ="margin-bottom:3px;">Date Of Birth</label>
                        <input type="date" name="dateofbirth" id="dateofbirth">
                  </div>
                </div>
              </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <div class="form-label-group">
                    <input type="text" id="Phone" class="form-control" placeholder="Phone" required="required">
                    <label for="Phone">Phone</label>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-label-group">
                    <input type="text" id="Email" class="form-control" placeholder="Email" required="required">
                    <label for="Email">Email</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="Job" class="form-control" placeholder="Job" required="required">
                  <label for="Job">Job</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" id="company" class="form-control" placeholder="company" required="required">
                    <label for="company">Company</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="position" class="form-control" placeholder="position" required="required">
                  <label for="position">Position</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="Salary" class="form-control" placeholder="Salary" required="required">
                  <label for="Salary">Salary</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-label-group">
                        <input type="text" id="Facebook" class="form-control" placeholder="Phone" required="required">
                        <label for="Facebook">Facebook/Twitter/Instagam</label>
                    </div>
                </div>
            </div>
          </div>
          <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4">
                    <select class="custom-select" name="Hobby"  >
                      <option value="0">Hobby 1st</option>
                      <option value="">Football</option>
                      <option value="">Cooking</option>
                      <option value="">Shopping</option>
                      <option value="">Tenis</option>
                      <option value="">Cat</option>
                      <option value="">Dog</option>
                      <option value="">Book</option>
                      <option value="">Music</option>
                  </select>
                  </div>
                  <div class="col-md-4">
                    <select class="custom-select" name="Hobby"  >
                      <option value="0">Hobby 2nd</option>
                      <option value="">Football</option>
                      <option value="">Cooking</option>
                      <option value="">Shopping</option>
                      <option value="">Tenis</option>
                      <option value="">Cat</option>
                      <option value="">Dog</option>
                      <option value="">Book</option>
                      <option value="">Music</option>
                  </select>
                  </div>
                  <div class="col-md-4">
                    <select class="custom-select" name="Hobby"  >
                      <option value="0">Hobby 3rd</option>
                      <option value="">Football</option>
                      <option value="">Cooking</option>
                      <option value="">Shopping</option>
                      <option value="">Tenis</option>
                      <option value="">Cat</option>
                      <option value="">Dog</option>
                      <option value="">Book</option>
                      <option value="">Music</option>
                  </select>
                  </div>
                </div>
            </div>
          <div class="form-group">
                <div class="form-row">
                    <div class="form-label-group">
                        Select files: <input type="file" name="myFile" multiple>
                    </div>
                </div>
            </div>
                <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-primary" value="Load to FLove" href = "{{route('login.index')}}">
                </div>

        </form>

        
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="source/login/vendor/jquery/jquery.min.js"></script>
  <script src="source/login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="source/login/vendor/jquery-easing/jquery.easing.min.js"></script>

  {{-- me js --}}
  <script src="source/js/me.js"></script>

</body>

</html>
