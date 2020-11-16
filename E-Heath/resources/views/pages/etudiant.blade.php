<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Unicat project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TELE-ENSEIGNEMENT</title>
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/a pple-touch-icon.png" rel="apple-touch-icon">
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
          <p class="centered"><a href="profile.html"><img src="img/a.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Aliou Gueye</h5>
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
          <div class="courses_search_container">
            <form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
              <input type="search" class="courses_search_input" placeholder="Rechercher" required="required">
              <select id="courses_search_select" class="courses_search_select courses_search_input">
                <option>Toutes les catégories</option>
                <option>Chirurgie</option>
                <option>Pédiatrie</option>
                <option>Dermatologie</option>
              </select>
              <button action="submit" class="courses_search_button ml-auto">Rechercher</button>
            </form>
          </div>
          <div class="sidebar_section_title">Formations disponibles</div><br><br>
          <div class="courses_container">
            <div class="">   
            
             

              
                <!-- Course -->
              <?php 
                 
                 for ($i=0; $i <count($requet) ; $i++) { 

                    $idCour=$requet[$i];
                    $requet2=DB::table('cours')
                    ->where('id','=',$idCour['cours_id'])->get();
                    $requet2=json_decode(json_encode($requet2), true);
                    $cour=$requet2['0'];

                    $prof=DB::table('professeurs')
                    ->where('id','=',$cour['prof_id'])->get();
                    $prof=$prof['0'];
                    
                           ?>
              <div class="col-lg-6 course_col">
                <div class="course">
                  <div class="course_image"><img src="images/3.png" alt=""></div>
                  <div class="course_body">
                    <h3 class="course_title"><a href="course.html"><?php echo($cour['nomDucours']) ?></a></h3>
                    <div class="course_teacher"><?php echo($prof->nom) ?></div>
                    <div class="course_text">
                      <p><?php echo($cour['libelleCours']) ?></p>
                    </div>
                  </div>
                  <div class="course_footer">
                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                      <div class="course_info">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <span><?php echo($cour['inscrits']) ?> inscrits</span>
                      </div>
                      
                      <div class="course_price ml-auto"><?php echo($cour['date']) ?></div>
                    </div>
                  </div>
                </div>
              </div><?php 
                }?>
              </div>

      
            <div class="row pagination_row course">
              <div class="col">
                <div class="pagination_container d-flex flex-row align-items-center justify-content-start">
                  <ul class="pagination_list">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                  </ul>
                  <div class="courses_show_container ml-auto clearfix">
                    <div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
                    <div class="courses_show_content">
                      <span>Show: </span>
                      <select id="courses_show_select" class="courses_show_select">
                        <option>06</option>
                        <option>12</option>
                        <option>24</option>
                        <option>36</option>
                      </select>
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
