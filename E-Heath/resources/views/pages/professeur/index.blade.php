@extends('../../layouts.app')
@section('content')
  <section id="container">
    
   @include('../../partials.menuProf')
   
 
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <div class="row mt">
              <!-- PANELS -->
            
              <!-- /col-md-4-->
              <?php 
                  
                 for ($i=0; $i <count($requet); $i++){ 

                    $user=$requet[$i];
                  
                    $requet2=DB::table('cours')
                        ->where('id','=',$user['cours_id'])->get();
                    $requet2=json_decode(json_encode($requet2), true);
                    $cour=$requet2['0'];

                    $prof=DB::table('professeurs')
                    ->where('id','=',$cour['prof_id'])->get();
                    $prof=$prof['0'];
                    
                           ?>
             <div class="col-md-4 col-sm-4 mb">
              <div class="col-lg-16 course_col">
                <div class="course">
                  <div class="course_image"><img src="images/1.png" alt=""></div>
                  <div class="course_body">
                    <h3 class="course_title" style=" word-wrap: break-word; text-overflow: ellipsis;"><a href="courProf"><?php echo($cour['nomDucours']) ?></a></h3>
                    <div class="course_teacher"><?php echo($prof->nom) ?></div>
                  </div>
                  <div class="course_footer">
                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                      <div class="course_info">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <span><?php echo($cour['inscrits']) ?></span>
                      </div>
                      <div class="course_price ml-auto"><?php echo($cour['date']) ?></div>
                    </div>
                  </div>
                </div>
              </div> 
              </div>
              <?php 
                }?>
              <!-- /col-md-4 -->
            
              <!-- /col-md-4 -->
              
            </div>
          </div>
          
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
            <!-- RECENT ACTIVITIES SECTION -->
            <h4 class="centered mt">Activités récentes</h4>
            <!-- First Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>Maintenant</muted>
                  <br/>
                  <a href="#"><?php echo($user['firstname']." ".$user['lastname']) ?></a> a consulté <?php echo($cour['nomDucours']) ?>.<br/>
                </p>
              </div>
            </div>
            
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
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
@stop('content')
