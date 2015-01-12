<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>-- Kabul Innovation Lab--</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
  <style>
  #con .well{
    height:10px;
    margin-right:40px;
  }
  
  #nav.affix {
    position: fixed;
    top: 0;
    width: 100%;
    z-index:1030;
  }
  </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    );
    $("#show1").click(function(){
      $("#com1").fadeToggle("slow");
    });
    $("#show2").click(function(){
      $("#com2").fadeToggle("slow");
    }); 
    $("#show3").click(function(){
      $("#com3").fadeToggle("slow");
    });
    $("#show4").click(function(){
      $("#com4").fadeToggle("slow");
    });
    $("#show5").click(function(){
      $("#com5").fadeToggle("slow");
    });
    $("#show6").click(function(){
      $("#com6").fadeToggle("slow");
    });
});
</script>
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body data-spy="scroll">
  <div class="container" id="con">
    <div class="row">
      <div class="col-md-12">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" style="line-height:0px;font-size:12px"><i class="fa fa-rss"></i> Contact</a></li>
          <li><a href="#" style="line-height:0px;font-size:12px"><i class="fa fa-calendar"></i> Past iLabs</a></li>
          <li><a href="#" style="line-height:0px;font-size:12px"><i class="fa fa-video-camera"></i> Privacy Policy</a></li>
          <li><a href="#" style="line-height:0px;font-size:12px"><i class="fa fa-user"></i> IPR</a></li>
        </ul>
      </div>
    </div>
  </div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="10" id="nav">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img id="logo" src="img/tnlogo.png" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#ilab">iLabs</a>          
                    </li>  
                    <li  class="dropdown">
                        <a class="page-scroll dropdown-toggle" data-toggle="dropdown" href="#events">Events  <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a class="page-scroll" href="#prelabs">Pre-Labs</a></li>
                          <li><a class="page-scroll" href="#ilabs">iLabs</a></li>
                          <li><a class="page-scroll" href="#closing">Closing Ceremony</a></li>
                          <li class="divider"></li>
                          <li><a class="page-scroll" href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="page-scroll" href="#mentors">Mentors</a>
                    </li>
                    
                    <li>
                      <a class="page-scroll" href="#participate">Participate</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#project">Projects</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#media">Media</a>
                    </li>  
                    <li>
                      <a class="page-scroll" href="#resours">Resources</a>
                    </li> 
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                  <li><a class="page-scroll" href="#contact">Contact</a></li>
                  <li><a href="#">Past iLabs</a></li>
                  
                </ul>
            </div>
            
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        
    </nav>

    <!-- Intro Section -->
    <section id="page-top" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h3>What We Want to Achieve?</h3> -->
                    
                    <h1 id="head">We Transform Afghanistan into a Technology Nation.</h1>
                    <hr/>
                  
                  
                </div>
            </div>
            <h2 id="head">Actions Speak Louder Than Words!</h2>
            <!-- Carousel -->
              <div class='row'>
                <div class='col-md-offset-2 col-md-8'>
                  <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
                    <!-- <ol class="carousel-indicators">
                      <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#quote-carousel" data-slide-to="1"></li>
                      <li data-target="#quote-carousel" data-slide-to="2"></li>
                      <li data-target="#quote-carousel" data-slide-to="3"></li>
                    </ol> -->
                    
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner">
                      
                      <!-- Quote 1 -->
                      <div class="item active">
                        <blockquote>
                          <div class="row">
                            
                            <div class="col-sm-12">
                              <p class="lead" style="color:#fff">Creating platforms for learning, sharing & connecting. </p>
                            
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!-- Quote 2 -->
                      <div class="item">
                        <blockquote>
                          <div class="row">
                          
                            <div class="col-sm-12" style="color:#fff">
                              <p>Promoting innovation & building leadership in technology.</p>
                              
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!-- Quote 3 -->
                      <div class="item">
                        <blockquote>
                          <div class="row">
                            <!-- <div class="col-sm-3 text-center">
                              <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
                            </div> -->
                            <div class="col-sm-12" style="color:#fff">
                              <p>Creating technology and engineering apps to streamline workflows and help businesses manage expectations easily.</p>
                              <!-- <small>Someone famous</small> -->
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      
                      <!-- Quote 4 -->
                      <div class="item">
                        <blockquote>
                          <div class="row">
                            <!-- <div class="col-sm-3 text-center">
                            <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
                          </div> -->
                          <div class="col-sm-12" style="color:#fff">
                            <p>Developing a strong workforce, accelerating startups, engaging with the community. </p>
                            <!-- <small>Someone famous</small> -->
                          </div>
                        </div>
                      </blockquote>
                    </div>
                    </div>
                    
                    <!-- Carousel Buttons Next/Prev -->
                    <!-- <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a> -->
                  </div>                          
                </div>
              </div>
          
            
            <!-- /Carousel -->
            
            <a class="page-scroll" href="#programs" style="color:#fff"><i class="fa fa-angle-down fa-4x"></i></a>
        </div>
    </section>

    <!-- Ilab Section -->
    <section id="ilab" class="ilab-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>Advisements</h1>
          </div>
        </div>
      </div>
    </section>
    
    <!-- 
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>What We Offer?</h1>
                    <p class="lead">
                      By creating, developing innovative tech solutions, we set standards for the market. With years of experience in the market, we designed a unique set of services and solutions that can transform your business, delight your staff, and inspire your clients. Our services are provided in the following categories: 
                    </p>
                    
                    
                    <div class="container">
                      <div class="row">
                        
                          <div class="col-md-6">
                            
                              <div class="blockquote-box blockquote-warning clearfix">
                                <div class="square pull-left">
                                  <span class="fa fa-building-o fa-3x"></span>
                                </div>
                                <h4>
                                  Technology Infrastructure</h4>
                                  <p>
                                    Managed services, IT consulting and implementation.
                                  </p>
                                </div>
                                
                                <div class="blockquote-box blockquote-primary clearfix">
                                  <div class="square pull-left">
                                    <span class="fa fa-gears fa-3x"></span>
                                  </div>
                                  <h4>
                                    Software Services</h4>
                                    <p>
                                      Mobile and web apps development, software localization, maintenance and testing. 
                                    </p>
                                  </div>
                                  
                                <div class="blockquote-box blockquote-info clearfix">
                                  <div class="square pull-left">
                                    <span class="fa fa-cloud fa-3x"></span>
                                  </div>
                                  <h4>
                                    Web Services & Cloud Computing</h4>
                                    <p>
                                      Interactive, compelling services for business, education, government and society.
                                    </p>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="blockquote-box blockquote-success clearfix">
                                    <div class="square pull-left">
                                      <span class="fa fa-graduation-cap fa-3x"></span>
                                    </div>
                                    <h4>
                                      Community Technology & Technology Education</h4>
                                      <p>
                                        Community technology, lifelong learning and professional development for children, youth & adults.
                                      </p>
                                    </div>
                                    <div class="blockquote-box blockquote-warning clearfix">
                                      <div class="square pull-left">
                                        <span class="fa fa-group fa-3x"></span>
                                      </div>
                                      <h4>
                                        Community & Social Media</h4>
                                        <p>
                                          Empowering communities to produce and share stories, and take action. 
                                        </p>
                                      </div>
                                      <div class="blockquote-box blockquote-danger clearfix">
                                        <div class="square pull-left">
                                          <span class="fa fa-rocket fa-3x"></span>
                                        </div>
                                        <h4>
                                          Business Acceleration</h4>
                                          <p>
                                            Startup support, mentoring, coaching and business acceleration.
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="blockquote-box blockquote-success clearfix">
                                          <div class="square pull-left">
                                            <span class="fa fa-graduation-cap fa-3x"></span>
                                          </div>
                                          <h4>
                                            Policy & Regulatory</h4>
                                            <p>
                                              Policy & regulatory research, analysis, advocacy, & advisory services.
                                            </p>
                                          </div>
                                      </div>
                                    <hr/>
                                      <h3>
                                        TechNation has established a strong R&D unit serving our purpose of providing quality services and products for many years. 
                                      </h3>
                                    </div>
                                  </div>
                                  
                    
                </div>
            </div>
        </div>
    </section> -->

    <!-- Events Sections -->

    <!-- prelabs Section -->
    <section id="prelabs" class="prelabs-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-icon">
                <span class="fa fa-2x fa-event">Pre-Lab</span>
              </div>
              <div class="info">
                  <h4 class="text-center">Title</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                  
              </div>
            </div>
        </div>
      </div>
      </div>
    </section>

    <!-- ilabs Section -->
    <section id="ilabs" class="ilabs-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="box">
              <div class="box-icon">
                <span class="fa fa-2x fa-event">iLab</span>
              </div>
              <div class="info">
                  <h4 class="text-center">Title</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- closing Section -->
    <section id="closing" class="closing-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="box">
              <div class="box-icon">
                <span class="fa fa-event">Closing Ceremony</span>
              </div>
              <div class="info">
                  <h4 class="text-center">Title</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <!-- project Section -->
    <section id="project" class="project-section">
        <div class="container">
        <div class="row">
          <div class="page-header"><h1>Projects</h1></div>
        </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                <h3>Android News</h3>
                      <div class="thumbnail">
                        <img src="img/dsc_0257.jpg"alt="...">
                        <div class="caption">
                            <p class="text-justify"> 1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, </p>
                          <p><a class="btn btn-primary btn-outline" href="#" data-toggle="modal" data-target="#one">Read more</a></p>
                        </div>
                        </div>
                      </div>
                    </div>
                
                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                      <h3>Tolo News</h3>
                        <div class="thumbnail">
                          <img src="img/dsc_0744.jpg" alt="...">
                          <div class="caption">
                            <p class="text-justify">Tolo News’ online elections coverage. This site will maximising interaction and user-driven content, and will include mapping public</p>
                            <p><a href="#" class="btn btn-primary btn-outline" role="button" href="#" data-toggle="modal" data-target="#two">Read more</a></p>
                          </div>
                        </div>
                        </div>
                      </div>

                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                      <h3>Android News</h3>
                        <div class="thumbnail">
                          <img src="img/dsc_0745 (1).jpg" alt="...">
                          <div class="caption">
                          <p class="text-justify">8AM news via Android! This new mobile application will customise content from one of Afghanistan’s leading investigative newspapers application</p>
                            <p><a href="#" class="btn btn-primary btn-outline" role="button" href="#" data-toggle="modal" data-target="#three">Read more</a></p>
                          </div>
                        </div>
                        </div>
                      </div>
            </div>

            <div class="row">
                    <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                    <h3>One Tv</h3>
                      <div class="thumbnail">
                        <img src="img/dsc_0257.jpg"alt="...">
                        <div class="caption">
                            <p class="text-justify"> 1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio</p>
                          <p><a href="#" class="btn btn-primary btn-outline" role="button" href="#" data-toggle="modal" data-target="#four">Read more</a></p>
                        </div>
                        </div>
                      </div>
                    </div>
                
                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                      <h3>Tolo News</h3>
                        <div class="thumbnail">
                          <img src="img/dsc_0744.jpg" alt="...">
                          <div class="caption">
                            <p class="text-justify">Tolo News’ online elections coverage. This site will maximising interaction and user-driven content, and will include mapping public</p>
                            <p><a href="#" class="btn btn-primary btn-outline" role="button" href="#" data-toggle="modal" data-target="#five">Read more</a></p>
                          </div>
                        </div>
                        </div>
                      </div>

                      <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                      <h3>Android News</h3>
                        <div class="thumbnail">
                          <img src="img/dsc_0745 (1).jpg" alt="...">
                          <div class="caption">
                          <p class="text-justify">8AM news via Android! This new mobile application will customise content from one of Afghanistan’s leading investigative newspapers</p>
                            <p><a href="#" class="btn btn-primary btn-outline" role="button" href="#" data-toggle="modal" data-target="#six">Read more</a></p>
                          </div>
                        </div>
                        </div>
                      </div>
            </div>


            
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
        <div class="row">
     <h1 class="text-center">WE ARE HERE</h1>

    <div id="map-canvas"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=technation&amp;sll=34.75064,68.598633&amp;sspn=2.355912,4.938354&amp;t=m&amp;ie=UTF8&amp;hq=technation&amp;hnear=&amp;ll=34.637728,68.89801&amp;spn=0.677933,0.823975&amp;z=9&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=technation&amp;sll=34.75064,68.598633&amp;sspn=2.355912,4.938354&amp;t=m&amp;ie=UTF8&amp;hq=technation&amp;hnear=&amp;ll=34.637728,68.89801&amp;spn=0.677933,0.823975&amp;z=9" style="color:#0000FF;text-align:left">View Map</a></small></div>
    <hr>
    <div class="col-md-7">
        <div class="row form-group">
            <div class="col-md-5">
                <input class="form-control" id="firstName" name="firstName" placeholder="Full Name" required="" type="text">
            </div>
            <div class="col-md-7">
                <input class="form-control" id="lastName" name="lastName" placeholder="Email" required="" type="email">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <textarea class="form-control" placeholder="Your Message"></textarea>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <button class="btn btn-primary btn-outline pull-right">Contact Us</button>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-md-5"> <address>
    <div class="col-md-6 pull-left text-left">
      <p class="mbottom text-justify">We would love to talk to you and answer all of your questions</p>
      <span class="strong"><b>TechNation</b></span> <br >
      Shahid Abdul Haq Square <br/>
            Dunya Plaza<br >
      Ground Floor <br >
      </div>
      <div class="col-md-6 pull-left text-left">
      <p class="mbottom">+93 70 616 9995</p>
      <p class="mbottom">
      <a href="#">info@technation.af</a><br >
      <a href="https://www.facebook.com/technation.af">TechNation on Facebook</a><br >
      <a href="http://www.twitter.com/technationaf">@technationaf on Twitter</a><br >
      <a href="http://www.linkedin.com/company/2527758?trk=tyah">TechNation on LinkedIn</a>
      </p>
      <p><span class="strong">Openning hours: </span><br >
      Saturday to Thursday <br >
      08:00 to 17:00
      </p>
      </div>
    </div>
</div>
        </div>
    </section>
    
    <!-- Advisement Section -->
    <section id="advice" class="advice-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>Advisements</h1>
          </div>
        </div>
      </div>
    </section>
    
    <?php
    include("includes/modal.php");
    ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script>
    $(document).ready(function() {
      //Set the carousel options
      $('#quote-carousel').carousel({
        pause: true,
        interval: 4000,
      });
    });



    </script>
</body>

</html>
