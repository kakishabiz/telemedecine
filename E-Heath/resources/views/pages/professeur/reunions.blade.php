<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
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
  <link rel="stylesheet" href="css/to-do.css">
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    @include('../../partials.menuProf')
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
        <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Réunions</h3>
        <!--  row -->
        <!-- COMPLEX TO DO LIST -->
        <div class="row mt">
          <div class="col-md-12">
            <section class="task-panel tasks-widget">
              <div class="panel-heading">
                <div class="pull-left">
                  <h4><i class="fa fa-tasks"></i> Les réunions programmées</h4>
                </div>
                <br>
              </div>
              <div class="panel-body">
                <div class="task-content">
                  <ul class="task-list" >
                    <li> 
                    <?php 
                      
                     for ($i=0; $i <count($requet); $i++){ 

                        $reunion=$requet[$i];
                        
                               ?> 
                      <div class="task-title">
                        <span class="task-title-sp"><h5><?php echo($reunion['libelle']) ?> </h5></span>
                        <span class="badge bg-theme">Date : <?php echo($reunion['date']) ?></span>
                        <span class="badge bg-theme">Heure : <?php echo($reunion['heure']) ?> GMT</span>
                        <div class="pull-right hidden-phone">
                          <button class="btn btn-success btn-xs"><i class=" fa fa-check">Joindre</i></button>
                        </div>
                      </div>
                    <?php }?>
                    
                    </li>
                  </ul>
                </div>
                <div class=" add-task-row">
                  <a class="btn btn-success btn-sm pull-left" href="newReunionProf">Ajouter une nouvelle réunion</a>
                </div>
              </div>
            </section>
          </div>
          <!-- /col-md-12-->
        </div>
        <!-- /row -->
         <div class="row mt">
          <div class="col-md-12">
            <section class="task-panel tasks-widget">
              <div class="panel-heading">
                <div class="pull-left">
                  <h4><i class="fa fa-tasks"></i> Mes invitations</h4>
                </div>
                <br>
              </div>
              <div class="panel-body">
                <div class="task-content">
                  <ul class="task-list">
                    <li>
                      
                      <div class="task-title">
                        <span class="task-title-sp"><h5>Discussion sur le COVID-19</h5></span>
                        <span class="badge bg-theme">Date : 15/03/2020</span>
                        <span class="badge bg-theme">Heure : 15h30 GMT</span>
                        <span class="badge bg-theme">Auteur : Dr Diop</span>
                        <div class="pull-right hidden-phone">
                          <button class="btn btn-success btn-xs"><i class=" fa fa-check">Joindre</i></button>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
          <!-- /col-md-12-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!--main content end-->
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
