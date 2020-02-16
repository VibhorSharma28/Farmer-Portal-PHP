<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <style type="text/css">
      body{
      background: url('chu.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    }

  </style>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <div class="container" style="margin-top:60px;">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Log In</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="login.php" method="post" id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email2" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="pass2" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    

                                    <div class="col-sm-12 controls">
                                      <input type="submit" id="btn-login" class="btn btn-success" value="Log in">
                                      
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Log in</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form action="sign_up.php" method="post" id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Number" class="col-md-3 control-label">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="num" placeholder="Mobile Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Date of Birth" class="col-md-3 control-label">Date of Birth</label>
                                    <div class="col-md-9">
                                        <input type="Date" class="form-control" name="dob">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Gender" class="col-md-3 control-label">Gender</label>
                                    <div class="col-md-9">
                                        <select name="gender">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Current State" class="col-md-3 control-label">Current State</label>
                                    <div class="col-md-9">
                                        <select name="state">
                                            <option>Andhra Pradesh</option>
                                            <option>Arunachal Pradesh</option>
                                            <option>Assam</option>
                                            <option>Bihar</option>
                                            <option>Chhattisgarh</option>
                                            <option>Delhi</option>
                                            <option>Goa</option>
                                            <option>Gujarat</option>
                                            <option>Haryana</option>
                                            <option>Himachal Pradesh</option>
                                            <option>Jammu and Kashmir</option>
                                            <option>Jharkhand</option>
                                            <option>Karnataka</option>
                                            <option>Kerala</option>
                                            <option>Madhya Pradesh</option>
                                            <option>Maharashtra</option>
                                            <option>Manipur</option>
                                            <option>Meghalaya</option>
                                            <option>Mizoram</option>    
                                            <option>Nagaland</option>
                                            <option>Odisha</option>
                                            <option>Punjab</option>
                                            <option>Rajasthan</option>
                                            <option>Sikkim</option>
                                            <option>Tamil Nadu</option>
                                            <option>Telangana</option>
                                            <option>Tripura</option>
                                            <option>Uttar Pradesh</option>
                                            <option>Uttarakhand</option>
                                            <option>West Bengal</option>
                                            <option>Union Territories of India</option>
                                        </select></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Occupation" class="col-md-3 control-label">Occupation</label>
                                    <div class="col-md-9">
                                        <select name="occupation" required>
                                          <option>Farmer</option>
                                          <option>Non-Farmer</option>
                                        </select></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Confirm Password" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="Confirm_Password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">                                  
                                    <div class="col-md-offset-3 col-md-9">
                                        <input type="submit" id="btn-signup" class="btn btn-info" value="Sign Up">
                                    </div>
                                </div>
                            </form>
                         </div>
                    </div>
         </div> 
    </div>
</body>
</html>