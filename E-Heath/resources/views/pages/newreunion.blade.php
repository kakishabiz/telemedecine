

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
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Bootstrap core CSS -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template --> 
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/style-responsive.css" rel="stylesheet">
  <script src="/lib/chart-master/Chart.js"></script>
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="/lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="/lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="/lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="/lib/bootstrap-datetimepicker/datertimepicker.css" />
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
   
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
         <section id="main-content">
      <section class="wrapper">

        <h3><i class="fa fa-angle-right"></i> Saisir les informations relatives à la réunion</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              <form action="/addReunion" class="form-horizontal style-form" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                  <label class="control-label col-md-3">Intitulé</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline" size="16" type="text" value="" name="libelle">
                    <span class="help-block">Donnez un titre à la réunion</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Date</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <input type="text" readonly="" value="01-01-2014" size="16" class="form-control" name="date">
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                    <span class="help-block">Selectionnez une date</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Heure</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline" size="16" type="text" value="" name="heure">
                    <input type="hidden" name="matricule" <?php if(isset($matricule)) echo "value=".$matricule.";"?>>
                    <span class="help-block">Preciser l'heure de la réunion</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Veuillez inviter des participants</label>
                  <div class="col-md-3 col-xs-11">
                    <div>
                        <input class="form-control form-control-inline" size="16" type="file" id="invites" name="invites" value="invites" placeholder="Choisir un fichier">
                    </div>
                  
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Valider</button>
                      <button class="btn btn-theme04" type="button">Annuler</button>
                    </div>
                  </div>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!--main content end-->
  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="/lib/jquery.scrollTo.min.js"></script>
  <script src="/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="/lib/common-scripts.js"></script>
  <script type="text/javascript" src="/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="/lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="/lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>
  <script type="text/javascript">
    @if(isset($estOk))
      @if($estOk)
          alert('reunion cree avec succes');
        
      @else
          alert('operation echouee');
      @endif
    @endif   
  </script>

</body>

</html>
