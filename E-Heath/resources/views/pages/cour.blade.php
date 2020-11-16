<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashio - Bootstrap Admin Template</title>
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
  <link rel="stylesheet" type="text/css" href="styles/courses.css">
  <link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
  <link rel="stylesheet" type="text/css" href="styles/course.css">
  <link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="styles/bootstrap4/popper.js"></script>
  <script src="styles/bootstrap4/bootstrap.min.js"></script>
  <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
  <script src="plugins/easing/easing.js"></script>
  <script src="plugins/parallax-js-master/parallax.min.js"></script>
  <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
  <script src="js/course.js"></script>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
   @include('partials.menu')
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/mariam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Mariama BA</h5>
          <li class="mt">
              <i class="fa fa-dashboard"></i>
              <span>Tableau de bord</span>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Mes réunions</span>
              </a>
            <ul class="sub">
              <li><a href="reunions.html">Séminaire 1</a>22/03/2020</li>
              <li><a href="reunions.html">Séminaire 2</a>22/03/2020</li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
     <div class="super_container">
  <!-- Courses -->
  <div class="courses">
    <div class="container">
      <div class="row">
        <!-- Courses Main Content -->
       <div class="col-lg-7">       
          <div class="course_container">
            <div class="course_title">Les maladies héréditaires</div>
            <div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
              <!-- Course Info Item -->
              <div class="course_info_item">
                <div class="course_info_title">Professeur:</div>
                <div class="course_info_text"><a href="#">Mr Fall</a></div>
              </div>
              <!-- Course Info Item -->
              <div class="course_info_item">
                <div class="course_info_title">Catégories:</div>
                <div class="course_info_text"><a href="#">Médecine préventive</a></div>
              </div>
            </div>
            <!-- Course Image -->
            <div class="course_image"><img src="images/course_image.jpg" alt=""></div>
            <!-- Course Tabs -->
            <div class="course_tabs_container">
              <div class="tabs d-flex flex-row align-items-center justify-content-start">
                <div class="tab active">description</div>
                <div class="tab">Fichiers jointes (2)</div>
              </div>
              <div class="tab_panels">
                <!-- Description -->
                <div class="tab_panel active">
                  <div class="tab_panel_title"><?php $cour=$cours['0']; echo ($cour['formation']); ?></div>
                  <div class="tab_panel_content">
                    <div class="tab_panel_text">
                      <p>
                        {{cour['libelleCours']}}
                      </p>
                    </div>               
                  </div>
                </div>
                <!-- Curriculum -->
                <div class="tab_panel tab_panel_2">
                  <div class="tab_panel_content">
                    <div class="tab_panel_title">Les maladies héréditaires</div>
                    <div class="tab_panel_content">
                      <div class="tab_panel_text">
                        <p>Lorem Ipsn gravida nibh vel velit auctor aliquet.</p>
                      </div>
                      <!-- Dropdowns -->
                      <ul class="dropdowns">
                        
                        @foreach ($cours as $cour => $cour)
                       
                         <li class="">
                          <div class="dropdown_item">
                            <div class="dropdown_item_title"><span>PDF 1</span><a href="<?php echo($cour['chemin']); ?>" download="PDF.pdf"><img src="img/images.jpg" class="" align="right" width="100"></a></div>                          
                          </div>                       
                        </li>
                       @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>

        <!-- Courses Sidebar -->
        <div class="col-lg-3.5">
          <div class="sidebar">
            <!-- Categories -->
            <div class="sidebar_section">
              <div class="sidebar_section_title">Catégories</div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">Chirurgie</a></li>
                  <li><a href="#">Pédiatrie</a></li>
                  <li><a href="#">Dermatologie</a></li>
                  <li><a href="#">Psychiatrie</a></li>
                  <li><a href="#">Rhumatologie</a></li>
                  <li><a href="#">Médecine préventive</a></li>
                </ul>
              </div>
            </div>
            <!-- Latest Course -->
            <div class="sidebar_section">
              <div class="sidebar_section_title">Formations suivies (3)</div>
              <div class="sidebar_latest">
                <!-- Latest Course -->
                <div class="latest d-flex flex-row align-items-start justify-content-start">
                  <div class="latest_image"><div><img src="images/1.png" alt=""></div></div>
                  <div class="latest_content">
                    <div class="latest_title"><a href="course.html">Les maladies héréditaires</a></div>
                  </div>
                </div>
                <!-- Latest Course -->
                <div class="latest d-flex flex-row align-items-start justify-content-start">
                  <div class="latest_image"><div><img src="images/4.png" alt=""></div></div>
                  <div class="latest_content">
                    <div class="latest_title"><a href="course.html">COVID-19</a></div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
 
</body>

</html>