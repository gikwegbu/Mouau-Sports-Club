
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width" initial-scale="1">
    <title title="Michael Okpara University of Agriculture Umudike">MOUAU SPORTS CLUB</title><!--www.mouausc.com is the name of the website-->
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet"  href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="header.png" sizes="16*16" type="image/png"><!--this adds an icon to the tab browser for your webpage-->
    
<body>
  <div class="body">
     <?php include "header.php";?><!--this includes the logo of the site, for easy modification of the image, one change on the php file affects all pages-->
  
      <nav class="nav navbar-inverse " >
              <div class="container-fluid">
                  <?php include "navHeader.php";?><!--this includes the navheader when the screen sixe is reduced, it's another php file elsewhere-->
                  
                  
               <!--This section is where the nav menu is found-->
               <div class="collapse navbar-collapse" id="myNavbar">
                   <ul class="nav navbar-nav">
                       <li class="active"><a href="index.php" title="Home Page"><span class="glyphicon glyphicon-home"></span> Home</a> </li>
                       <li><a href="about.php" title="About us">About Us</a> </li>
                      <li><a href="#" title="click to send us a message" data-toggle="modal" data-target="#contact_us">Contact Us</a> </li>
                       <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Registered School Clubs">Registered clubs<span class="caret"></span></a>
                         <ul class="dropdown-menu">
                             <li><a href="R_clubs/basketball.php" title="click to view our basketball page">Basketball<span class="glyphicon glyphicon-football"></span></a></li>
                             <li><a href="R_clubs/football.php" title="click to view our football page">Football</a> </li>
                             <li><a href="R_clubs/volleyball.php" title="click to view our volleyball page">Volleyball</a> </li>
                             <li><a href="R_clubs/lawntennis.php" title="click to view our lawntennis page">Lawn Tennis</a> </li>
                             <li><a href="R_clubs/tabletennis.php" title="clisk to view our tabletennis page">Table Tennis</a> </li>
                             <li class=divider></li><!--this sets a division line from balling sports and other sports-->
                             <li><a href="R_clubs/boxing.php" title="click to view our boxing page">Boxing</a> </li>
                             <li><a href="R_clubs/physical.php" title="click to view our physical fitness page">Physical Fitness </a> </li>
                             <li><a href="R_clubs/body_building.php" title="click to view our body building page">Body Builders</a>  </li>
                             <li><a href="R_clubs/taikwando.php" title="click to view our taikwando page">Taikwando</a> </li>
                         </ul>
                       
                       </li>
                   </ul>
               
               
               
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" title="click to sign up" data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user"> Sign-Up</span></a> </li>
                    <li><a href="#" title="click to login"  data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in">  Login</span></a> </li>
                </ul>
             </div>
          </div>
      </nav><!--this data-spy and data-offset-top controls at what point user scrolls before the site navbar locks unto the screen top-->

   <br>
      
              <div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel"><!--the "hidden-xs" hides this div from small screen -->
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                  <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                      <li data-target="#myCarousel" data-slide-to="6"></li>
                        <li data-target="#myCarousel" data-slide-to="7"></li>
                          <li data-target="#myCarousel" data-slide-to="8"></li>
                           <li data-target="#myCarousel" data-slide-to="9"></li>
              </ol>

              <!-- Wrapper for slides -->
                      <div class="carousel-inner hidden-xs" role="listbox">
                           
                            <div class="item active">
                                <center> <img src="carousel/schoolgate.png" alt="MOUAU School Gate" width="100%" height="250"></center>
                            </div>
                           
                            <div class="item">
                                <center>  <img src="carousel/basket%20ball.jpg" alt="Basketball court" width="50%" height="250"></center>
                            </div>

                            <div class="item">
                          <center> <img src="carousel/football.jpg" alt="Football field" width="100%" height="250"></center>
                            </div>

                            <div class="item">
                             <center> <img src="carousel/volley.JPG" alt="volleyball court" width="50%" height="250"></center>
                            </div>

                            <div class="item">
                          <center> <img src="carousel/lawn%20tennis.JPG" alt="lawn tennis court" width="50%" height="250"></center>
                            </div>
                            
                              <div class="item">
                            <center> <img src="carousel/table%20tennis.png" alt="Table tennis court" width="50%" height="250"></center>
                            </div>
                            
                              <div class="item">
                             <center> <img src="carousel/boxing.JPG" alt="boxing" width="50%" height="250"></center>
                            </div>
                            
                              <div class="item">
                         <center> <img src="carousel/schoolgate.png" alt="physical" width="50%" height="250"></center>
                            </div>
                            
                              <div class="item">
                           <center> <img src="carousel/Fampix.JPG" alt="Weight lifters" width="50%" height="250"></center>
                            </div>
                            
                              <div class="item">
                            <center> <img src="carousel/Taikwando.JPG" alt="taikwando area" width="50%" height="250"></center>
                            </div>
                      </div><!--the "hidden-xs" means i'm hiding this content from small smartphone user-->
                  <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                </div>
      
<br>
    
    
      <div class="container" id="mainbody">
         <div class="row">
        
          <div class="col-lg-6 col-md-6" ><!--this controls the left part of the column setting it to 6, both for large and medium screen-->
              <div class="tab">
                  <ul class="nav nav-tabs nav-justified" role="tablist">
                      <li role="presentation" class="active"><a  href="#mouau_history" aria-controls="mouau_history" role="tab" data-toggle="tab">History Of Mouau</a> </li>
                      <li role="presentation"><a href="#mouau_sports" aria-controls="mouau_sports" role="tab" data-toggle="tab">History Of Mouau Sports</a> </li>
                  </ul>
                  
                  <!--Tab panes-->
                  <div class="tab-content">
                      <div class="tab-pane fade in active" id="mouau_history" role="tabpanel">
                          <p><i>Brief history of Michael Okpara University of Agriculture Umudike...</i></p>
                          <p class="text-justify">

                              <i class="text-uppercase">Michael Okpara University of Agriculture,</i> <b>Umudike,</b> is one of the three Universities of Agriculture established by the Federal Government of Nigeria.  Two Universities of Agriculture had earlier been established at <b>Abeokuta (Ogun State)</b> and <b>Makurdi (Benue State) </b>in 1988.<br><br> The Universities of Agriculture are charged with the central mandate and mission of imparting agricultural education in a scientific but practical way, coupled with applied research and such extension services as would assist in achieving national self-sufficiency in food and fibre production in the minimum time while at the same time catalyzing and sustaining rural development.<br>  Michael Okpara University of Agriculture, Umudike, came into existence precisely on the <cite>13th day of November, 1992</cite> when the Federal Government of Nigeria promulgated the Federal Universities of Agriculture <cite>Decree 1992 (also cited as Decree NQ 48 of 1992)</cite>. <br><br>This enabling law culminated in the appointment of the pioneer Governing Council led by Alhaji Mohamma Liman and the first Vice-Chancellor, Prof. Placid Njoku.<br> <br>The Institution effectively took off on  <strong>May 3, 1993</strong> when the University admitted its foundational students. At the epoch of the Institution’s history, only Eighty-two (82) students were enrolled to pursue various courses of study. This figure is at great variance with the recent statistics that put the students’ population at about Twenty-seven Thousand, Seven Hundred and Fifty (27,750) undergraduates, Four Thousand, Five Hundred and Ninety- eight (4,598) post graduates and Six Thousand, Seven Hundred and Thirty (6,730) part-time students at the Continuing Education Centre. This brings the total number of Michael Okpara University of Agriculture, Umudike students to <strong><i>Thirty-nine Thousand and Seventy-eight (39,078).</i></strong> What a massive quantum jump.<br><br>My Administration’s intention is to exceed the horizon of existing academic programmes, coupled with the ever skyrocketing demand for the acquisition of tertiary education, and mostly the nation’s recent focus on agrobusiness as an alternative revenue base of the economy, the students’ population is bound to explode.<br><br>  Also from the diminutive core members of staff that leant immense support to the then Vice-Chancellor in his pioneering efforts of laying a formidable foundation for the Institution, the University now has a staff strength of <strong>Three Thousand and Eighty-two (3,082)</strong> as at <strong>February 29, 2016</strong>. This is made up of Two Thousand, One Hundred and Eighty-four (2,184) non-teaching staff and a teaching staff with about Eighty (80) Professors standing at Eight Hundred and Nineteen (819).<br><br> The concept of the University of Agriculture is not restricted to Nigeria.  In fact, such Universities are spread all over the world. It has been stated elsewhere that the general concept originated from the “American agrarian philosophy which premised economic development on the farm as a family business”. <br><br>In Nigeria, the Universities of Agriculture being relatively new are lucky in that they can analyze the faults, weaknesses and strengths of Conventional Universities that offer degrees in Agriculture, and therefore develop objectives which are long-standing and tailored towards the production of better graduates as well as higher/better service to the community as a whole. 
                                    <br><br>Agricultural education, before 1988 when the first two Universities of Agriculture were established, was characterized by many weaknesses, viz.:
                                    <ul>
                                        <li> Lack of linkage between Agricultural Education, Research and Production.</li>
                                        <li> Lack of appropriate and more modern agricultural technologies.</li>
                                        <li> Inadequate preparation of undergraduates for self-employment.</li>
                                        <li>Loose linkage between the existing Faculties of Agriculture and  Agricultural Research Institutes/Colleges of Agriculture.</li>
                                        <li>Uncoordinated system of agricultural human resource development.</li>
                                        <li>   Low level extension services from the universities to farmers.</li>
                                        <li>Unsustainable agricultural practices that result in erosion and loss of rare gene pools.</li>
                                  </ul>

                                    The Universities of Agriculture were therefore established to help provide solutions to these weaknesses. On establishment, the philosophy of the Michael Okpara University of Agriculture, Umudike, was tailored towards this end. </p>
                       
                                       <p><b> LOCATION</b><br><br>

                                    Michael Okpara University of Agriculture, Umudike, is situated in an axis along the road from Umuahia to Ikot Ekpene. Its location is ten kilometers East of Umuahia, the Abia State Capital. <br><br>Umudike and other host neighbours are agrarian communities. This brings to fore the role of the University as one specializing in agriculture and related programmes. The University inherited the immovable facilities and properties of former Federal College of Agriculture which has been moved to Ishiagu in Ivo Local Government Area of Ebonyi State. The National Root Crops Research Institute has common boundaries and share facilities with the University.<br><br>At inception, there existed a cordial relationship between the University and the host communities. The story is different now. There are reports of some of the host communities illegally reselling parcels of the University land, despite compensation already paid by Government, some communities are also said to be of the habit of not allowing free access to sites where the University’s developmental projects are to be executed. Being careful not  to sound as an optimist, I want to allay your fears by assuring you that my administration would employ all diplomatic ethos to enshrine tranquility through amicable resolution of the issues. </p>
                      </div>
                      <div class="tab-pane fade" id="mouau_sports" role="tabpanel">
                          <p><i>Brief history of Michael Okpara University of Agriculture Umudike sports...</i></p>
                          <p class="text-justify">Mouau competes in the Nigerian University Game Association (NUGA). The variou registered clubs have complete qualifications to compete in any Nigerai sports. The  basketball team is called the <strong><i>"Dykers"</i></strong> a name coined from <b><i>Umudike...</i></b></p>
                      </div>
                  </div>
              </div>
      </div>
          <div class="col-lg-6 col-md-6" ><!--this controls the right part of the column setting it to 6, both for large and medium screen-->
             
                    <center>  <figure>
                          <img src="Vice_chancellor.PNG" alt="Prof. Francis O Otunta" width="320" height="320">
                          
                          <figcaption class="text-success"><center>Prof. Francis Ogbonnaya Otunta</center>The Vice Chancellor Of Michael Okpara University of Agriculture Umudike</figcaption>
                      </figure>
              </center><br><br>
              <div class="tab"><!--this controls VC's biography tablist-->
                  <ul class="nav nav-tabs nav-justified" role="tablist">
                      <li role="presentation" class="active"><a href="#biography" aria-controls="biography" role="tab" data-toggle="tab">Biography</a></li>
                  <li role="presentation"><a href="#Education_Qualification" aria-controls="Education_Qualification" role="tab" data-toggle="tab">Education Qualification</a></li>
                  <li role="presentation"><a href="#professional_history" aria-controls="professional_history"  role="tab" data-toggle="tab">Professional History</a> </li>
                  <li role="presentation"><a href="#professional_qualification"  aria-controls="professional_qualification" role="tab" data-toggle="tab">Professional Qualification</a></li>
                  </ul>
                  
                  <!--Tab panes-->
                  <div class="tab-content">
                      <div class="tab-pane fade in active" id="biography" role="tabpanel">
                          <b>Age:</b> 55 years<br>
                          <b>Date Of Birth:</b> 29th April, 1958<br>
                          <b>Gender:</b> Male<br>
                          <b> Marital Status:</b> Married<br>
                          <b>Profession:</b> Mathematician<br>
                      </div>
                      
                      <div class="tab-pane fade" id="Education_Qualification" role="tabpanel">
                               Pry-School Leaving Cert: St Patrick’s Primary School Afikpo. Started: 1964. Ended: 1971<br>
                               SSCE: Izzi High School Abakaliki . Started: 1972. Ended: 1976<br>
                               B.Sc: (Ind. Maths) Uniben Started: 1978. Ended: 1982<br>
                               M.Sc: (Maths – Operations Research) U I. Started: 1984. Ended: 1985<br>
                               Ph.D. (Mathematics) Unilorin Started:  Ended1991<br>
                      </div>
                      
                      <div class="tab-pane fade" role="tabpanel" id="professional_history">
                                    Graduate Assistant in: university of Benin . Started: 1983<br>
                                    Assistant Lecturer: university of Benin<br>
                                    Lecturer II: university of Benin . Started: 1988<br>
                                    Lecturer I: university of Benin . Started: 1991<br>
                                    Senior Lecturer: university of Benin . Started: 1997<br>
                                    Professor of Mathematics : university of Benin . Started: 2003<br>
                                    External examiner: Federal University of Tech. Minna . Started: 2004. Ended: 2006<br>
                                    External examiner: Abia State University . Started: 2008<br>
                                    External examiner: Ebonyi State University. Started: 2005. Ended: 2007<br>
                                    External examiner: Auchi Polytechnic Auchi. Started: 1995<br>
                                    External examiner: Auchi Polytechnic Auchi. Started: 2000. Ended: 2001<br>
                                    External Assessor: FUT AKURE . Started: 2005. Ended: 2010<br>
                                    External Assessor: Ambrose Alli University Ekpoma. Started: 2006. Ended: 2007<br>
                                    External Assessor: University of Ado Ekiti. Started: 2006<br>
                                    External Assessor: Abia State University. Started: 2008. Ended: 2009<br>
                                    External examiner: University of Ife (now Obafemi Awolowo University) . Started: 2003<br>
                                    Member: University Admissions Board, UNIBEN. Started: 2004. Ended: 2006<br>
                                    Member: Centre For Part-Time Management Board, UNIBEN. Started: 2004. Ended: 2006<br>
                                    Member: Central Entrance Examinations Committee, UNIBEN. Started: 2004. Ended: 2006<br>
                                    Member: University of Benin, Congregation representative. Started: 1999. Ended: 2004<br>
                                    Congregation Representative : Senior Staff Disciplinary Committee, University of Benin.. Started: 1997. Ended: 2001<br>
                                    Member: University of Benin Computer Management Board. Started: 1995. Ended: 1999<br>
                                    Vice Chairman: Academic Staff Union of Nigerian Universities (ASUU), Benin Chapter. Started: 1994. Ended: 1998<br>
                                    Chairman: Faculty of Science Research and Publications Committee, UNIBEN. Started: 1994. Ended: 1998<br>
                                     Faculty of Science Disciplinary Committee on Examinations Malpractice, University of Benin. Started: 1992. Ended: 1993<br>
                                    Director: Central Records Processing Unit Vice Chancellor’s Office Uniben. Started: 2004. Ended: 2006<br>
                                    Head of Mathematics Department: University of Benin. Started: 2002. Ended: 2004<br>
                                    Executive Editor: Benin Journal of Mathematical Science . Started: 1998. Ended: 2001<br>
                                    Deputy Director of Research: Department of Mathematics and Computer Science. University of Benin. Started: 1997. Ended: 1999<br>
                                    Examinations Officer: Faculty of Science, University of Benin. Started: 1994. Ended: 1998<br>
                                    Departmental Examinations Officer: Mathematics & Computer Science Department, University of Benin. Started: 1993. Ended: 1994<br>
                                    President: National Association of Mathematics Students of Nigeria, UNIBEN Chapter. Started: 1980. Ended: 1981<br>
                     
                      </div>
                      
                      <div class="tab-pane fade" id="professional_qualification" role="tabpanel">
                         
                          <b>Member</b>: National Association of Mathematics of Nigeria<br>
                          <b>Member:</b> Nigeria Mathematical Society<br>
                          <b>Membership of Societies:</b><br>
                                    Nigeria Mathematical Society (NMS), National Association of Mathematics of Nigeria<br>
                                    NYSC Best Employer of the year 2007; Honorary Award of Excellence – The Church of Nigeria, Anglican Communion; <br>
                                    GAPA Award – The People State & Resource Magazine (PSRM) ;<br>
                                    Development in Nigeria Merit Award (2009) – The People State & Resource Magazine (PSRM) ;<br>
                                    Distinguished Leadership in Nigeria Gold Award – Media Communications and Corporate Africa Limited ;PHF of Rotary Club.<br>
                                    E-mail: otunta2000@yahoo.co.uk
                         
                      </div>
                  </div>
                  
              </div>
                   
              </div>
          </div>
      </div>
      </div>
      


  
  
  
  
    </div>
  <?php include 'footer.php';?> <!--this add a footer file from another php, it requires it just incase the footer.php is no longer in existence it'll pop an error message or kill the next lines on code-->
   
   
   
   
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
                                        <form method="post" role="form" action="connect.php">
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
                               <form method="post" action="connect.php">
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
                               <form method="post" role="form" action="comment.php">
                                       <div class="form-group">
                                               <label class="control-label " for="email">Email:</label>
                                                   <input type="email"  name="email" class="form-control" required placeholder="Enter email">
                                           </div>
                                        <div class="form-group">
                                            <label class="control-label " for="comment" >Comment:</label><br>
                                                <textarea rows="6" cols="70" name="comment" placeholder="Enter message here..." ></textarea>
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