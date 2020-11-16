  <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>Télé<span>Enseignement</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="AcueilProf">Accueil</a></li>
          <li><a class="logout" href="coursProf">Formations</a></li>
          <li><a class="logout" href="creerCourProf">Ajouter Cour</a></li>
          <li><a class="logout" href="reunionProf">Réunions</a></li>
          <li><a class="logout" href="login">Logout</a></li>
        </ul>
      </div>
    </header>
     <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?php echo($user['imageProfil']) ?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo($user['firstname']." ".$user['lastname']) ?></h5>
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