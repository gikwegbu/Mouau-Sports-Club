<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width" initial-scale="1">
    <title title="MOUAU boxing Team">Mouau Boxing Club</title>
     <link rel="stylesheet" type="text/css" href="../index.css">
    <link rel="stylesheet"  href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="header.png" sizes="16*16" type="image/png"><!--this adds an icon to the tab browser for your webpage-->
    
<body>
  <div class="body">
        <div class="header">
          <div class="site_logo">
              <a href="../index.php"> <img src="../header.png" width="85%" height="150"></a>
          </div>
      </div><!--this includes the logo of the site, for easy modification of the image, one change on the php file affects all pages-->
  
      <nav class="nav navbar-inverse " >
              <div class="container-fluid">
                  <div class="navbar-header">
                      <a href="../index.php" class="navbar-brand" title="Michael Okpara University of Agriculture Umudike">MOUAU Sports Club</a>
                     <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar"><!--Thi button controls the dropdown menu on small screen-->
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                  </div><!--this includes the navheader when the screen sixe is reduced, it's another php file elsewhere-->
                  
                  
               <!--This section is where the nav menu is found-->
               <div class="collapse navbar-collapse" id="myNavbar">
                   <ul class="nav navbar-nav">
                       <li ><a href="../index.php" title="Home Page"><span class="glyphicon glyphicon-home"></span> Home</a> </li>
                       <li><a href="../about.php" title="About us">About Us</a> </li>
                      <li><a href="#" title="click to send us a message" data-toggle="modal" data-target="#contact_us">Contact Us</a> </li>
                       <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="boxing team">Boxing Club<span class="caret"></span></a>
                         <ul class="dropdown-menu">
                               <li><a href="basketball.php" title="click to view our basketball page">Basketball</a> </li>
                             <li><a href="football.php" title="click to view our football page">Football</a> </li>
                             <li><a href="volleyball.php" title="click to view our volleyball page">Volleyball</a> </li>
                             <li><a href="lawntennis.php" title="click to view our lawntennis page">Lawn Tennis</a> </li>
                             <li><a href="tabletennis.php" title="clisk to view our tabletennis page">Table Tennis</a> </li>
                           <li class=divider></li><!--this sets a division line from balling sports and other sports-->
                         <li><a href="physical.php" title="click to view our physical fitness page">Physical Fitness </a> </li>
                             <li><a href="body_building.php" title="click to view our body building page">Body Builders</a>  </li>
                             <li><a href="taikwando.php" title="click to view our taikwando page">Taikwando</a> </li>
                         </ul>
                       </li>
                       <li><a href="#" title="click to view our boxing videos on youtube" target="_blank">Youtube Channel <span class="glyphicon glyphicon-camera"></span></a></li>
                   </ul>
               
               
               
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" title="click to sign up" data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user"> Sign-Up</span></a> </li>
                    <li><a href="#" title="click to login"  data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in">  Login</span></a> </li>
                </ul>
             </div>
          </div>
      </nav><!--this data-spy and data-offset-top controls at what point user scrolls before the site navbar locks unto the screen top-->
    
    </div>
    
    <?php include '../footer.php';?>
     
   
    <!--for  signup, login and contact us modal-->
    <!--modal for signup-->
           <div class="container">
                    <div id="signup" class="modal fade" role="dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <!--moda content-->
                               <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" type="button" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-titile">Fill the form to Register</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" role="form" action="logged.php">
                                           <div class="form-group">
                                               <label class="control-label " for="First_name">First Name:</label>
                                                    <input type="text"  name="First_name" class="form-control" required placeholder="Enter First Name">
                                            </div>
                                           <div class="form-group">
                                               <label class="control-label " for="Last_name">Last Name:</label>
                                                        <input type="text" name="Last_name" class="form-control" required placeholder="Enter Last Name">
                                            </div>
                                           <div class="form-group">
                                               <label class="control-label " for="email">Email:</label>
                                                   <input type="email" name="email" class="form-control" required placeholder="Enter valid email">
                                           </div>
                                           <div class="form-group">
                                               <label class="control-label " for="Phone_number">Phone Number:</label>
                                                   <input type="tel" name="P_number" class="form-control" required placeholder="+234...................">
                                           </div>
                                           <div class="form-group">
                                               <label class="control-label " for="username">Username:</label>
                                                   <input type="text" name="username" class="form-control" required placeholder="Choose a  Username">
                                           </div>
                                         <div class="form-group">
                                             <label class="control-label " for="password">Password:</label>
                                                    <input type="password" name="password" class="form-control" required  placeholder="Type Password">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="R_password">Re-type Password:</label>
                                                  <input type="password" name="R_password" class="form-control"  required placeholder="Re-type Password">
                                           </div>

                                           <button type="submit" class="btn btn-primary" value="submit">Register</button>

                                   </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                        </div>
  </div>

                    <br>
          <!--modal for login--> 
                         <div id="login" class="modal fade" role="dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <!--moda content-->
                       <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal">&times;</button>
                                <h4 class="modal-titile">Login with your details</h4>
                            </div>
                            <div class="modal-body">
                               <form method="post" action="logged.php">
                                        <div class="form-group has-feedback">
                                            <label for="Email1">Email address</label>
                                            <input type="email" name="email" class="form-control" id="loginEmail1" placeholder="Email">
                                            <span id="user" class="glyphicon glyphicon-user form-control-feedback"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="Password1">Password</label>
                                            <input type="password" name="password" class="form-control" id="loginPassword1" placeholder="Password">
                                            <span id="lock" class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        </div>
                                          <div class="form-group">
                                                <div class="">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox"> Remember me</label>
                                                  </div>
                                                </div>
                                          </div>
                                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                        <button type="submit" class="btn btn-primary" value="submit">Login</button>
                               </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
            </div>
                        <br>
        <!--modal for contact us -->
                     <div id ="contact_us" class="modal fade" role="dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                     <!--contact us content-->
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal">&times;</button>
                                <h4 class="modal-titile">Contact us</h4>
                                <p><i>Express your feelings in the comment box below...</i></p>
                            </div>
                            <div class="modal-body">
                               <form method="post" role="form" action="logged.php">
                                       <div class="form-group">
                                               <label class="control-label " for="email">Email:</label>
                                                   <input type="email"  name="email" class="form-control" required placeholder="Enter email">
                                           </div>
                                        <div class="form-group">
                                            <label class="control-label " for="comment" >Comment:</label><br>
                                                <textarea rows="6" cols="70" placeholder="Enter message here..." ></textarea>
                                        </div>
                                     
                                            <button type="submit" class="btn btn-primary" value="Click to submit">Submit</button>
                                </form>
                            </div>
                               <div class="modal-footer">
                                <div class="col-sm-9">
                                    <i class="text-success"><marquee>thanks for expressing your feelings...</marquee></i>
                                   </div>
                               <div class="col-sm-3">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                   </div>
                                  
                            </div>
                         </div>
                         </div>
               </div>
               
             
              </div>
          
  

</body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</html>