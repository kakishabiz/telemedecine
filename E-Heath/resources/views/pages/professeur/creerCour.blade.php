@extends('../../layouts.app')
@section('content')
  <section id="container">
    
   @include('../../partials.menuProf')
   
 
    <section id="main-content">
      <section class="wrapper">
        <div class="form" >
        <form>
          <div class="form-group">
            <label for="cours">Cour</label>
            <input size="50px" type="email" class="form-control" id="cours" aria-describedby="emailHelp" placeholder="donner le nom du cours" name="nomCours">
            
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Description" name="description">
          </div>
          <div class="form-group">
            <label for="formation">Formation</label>
            <input type="text" class="form-control" id="formation" placeholder="Formation" name="formation">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Description" name="description">
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
         
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
   
  </section>
@stop('content')
