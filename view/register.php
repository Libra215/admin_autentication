<!DOCTYPE html>
<html lang="en">
<head>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <title>Bootstrap 5 Login Page</title>

</head>
<body>
  <div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
      <div class="panel panel-info" >
        <div class="panel-heading">
          <div class="panel-title">Sign up</div>
          <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >
          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

          <!-- Form Register mengambil Inputan user dan di kirim ke Controller Login untuk di validasi -->

          <form id="loginform" class="form-horizontal" role="form" action="../controller/AuthRegister.php" method="post">
            <div class="form-group">
              <label for="email" class="col-md-3 control-label">Nama</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="nama" placeholder="Nama">
              </div>
            </div>
            
            <div class="form-group">
              <label for="firstname" class="col-md-3 control-label">NRP</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="nrp" placeholder="NRP Here">
              </div>
            </div>
            <div class="form-group">
              <label for="lastname" class="col-md-3 control-label">Alamat</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-md-3 control-label">TTL</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="ttl" placeholder="Tempat Tanggal Lahir">
              </div>
            </div>
            
            <div class="form-group">
              <label for="icode" class="col-md-3 control-label">Email</label>
              <div class="col-md-9">
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
            </div>

            <div class="form-group">
              <label for="icode" class="col-md-3 control-label">No Hp</label>
              <div class="col-md-9">
                <input type="number" class="form-control" name="nohp" placeholder="No Hp">
              </div>
            </div>

            <div class="form-group">
              <label for="icode" class="col-md-3 control-label">Usernamse</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="username" placeholder="username">
              </div>
            </div>

            <div class="form-group">
              <label for="icode" class="col-md-3 control-label">Password</label>
              <div class="col-md-9">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
            </div>

            <div class="form-group">
              <!-- Button -->                                        
              <div class="col-md-offset-3 col-md-9">
                <!-- <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button> -->
                <input type="submit" class="btn btn-success mt-5" name="submit" value="Daftar">
                <!-- <span style="margin-left:8px;">or</span>   -->
              </div>
            </div>


            <div class="form-group">
              <div class="col-md-12 control">
                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                  Don't have an account! 
                  <a href="login.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                    Sign in Here
                  </a>
                </div>
              </div>
            </div>    
          </form>     
        </div>                     
      </div>  
    </div>
    
  </div> 
</div>
</body>
</html>