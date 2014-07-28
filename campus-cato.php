
<?php
  
  $title = 'Cato Campus | CPCC Public Directory';

  $pageName = 'CPCC Cato Campus';
  
  $sidebar = '';
  
  $navItems = '<div class="col-xs-1 pull-left lpad0">
    <a href="app-theme.php" class="btn btn-default btn-md pull-left nav-btn-lft"><span class="glyphicon glyphicon-arrow-left"></span></a></div>
    <div class="col-xs-10"><h1>' . $pageName . '</h1></div>
    <div class="col-xs-1 pull-right rpad0"><a href="app-theme.php" class="btn btn-default btn-md pull-right nav-btn-rt"><span class="glyphicon glyphicon-home"></span></a>
    </div>';
    
  include('inc/headcode.php'); 
  
  include('inc/ribbon-header-nav.php') 

?>

 
<div class="container inner"> 
  	
<!-- Seach Appliance -->
    <div class="input-group bmargin25">
      <input type="text" class="form-control input-lg" placeholder="Search">
      <span class="input-group-btn">
        <button class="btn btn-default btn-lg" type="button"><span class="glyphicon glyphicon-search"></span></button>
      </span>
    </div><!-- /input-group -->
    

	<div class="panel-group" id="accordion">
  <div class="panel panel-default">
  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
    <div class="panel-heading">
      <h4 class="panel-title">
          Map
      </h4>
    </div>
    </a>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
      <div class="google-map-canvas">
        <embed src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3257.6737200348575!2d-80.73081612634572!3d35.26437219814953!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d5d16056318e213!2sCato+Campus!5e0!3m2!1sen!2sus!4v1401306441435" width="100%" height="300" frameborder="0" style="border:0"></embed>
        </div>
        <h3>About <?php echo $pageName ?></h3>
        <p>The Cato Campus is home to more than 10,000 students, making it the third largest of CPCC’s six campuses. The student population ranges in age from high school to adult learners, and boasts many diverse backgrounds including non-native English speakers and career professionals.</p>
        <p>The campus has two main buildings for classrooms, labs, offices and other instructional support space. A third free-standing Horticulture building, attached greenhouse and turfgrass plots provide opportunities for hands-on instruction. The campus is also equipped with a separate Law Library and American Sign Language (ASL) lab.</p>
      </div>
      
    </div>
  </div>
  <div class="panel panel-default">
  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
    <div class="panel-heading">
      <h4 class="panel-title">
          Buildings at <?php echo $pageName ?>
      </h4>
    </div>
    </a>
    <div id="collapseTwo" class="panel-collapse collapse">
      <!-- Table -->
   <table class="table">
        <thead class="tetrad-blue-gradient">
          <tr>
            <th>Building Name</th>
            <th>Code/Initials</th>
            <th>Info</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Cato I</td>
            <td>CT</td>
            <td><a href="bldg-cato.php" title="Find this building" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-map-marker"></span>Find It</a></td>
          </tr>
          <tr>
            <td>Cato II</td>
            <td>CT</td>
            <td><a href="bldg-cato.php" title="Find this building" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-map-marker"></span>Find It</a></td>
          </tr>
          <tr>
            <td>Horticulture Center</td>
            <td>HO</td>
            <td><a href="#" title="Find this building" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-map-marker"></span>Find It</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="panel panel-default">
   <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
    <div class="panel-heading">
      <h4 class="panel-title">
          Departments &amp; Offices
      </h4>
    </div>
    </a>
    <div id="collapseThree" class="panel-collapse collapse">
        <?php include ('inc/dept-table.php'); ?>
    </div>
   </div> 
</div>

    



</div><!-- /.container.main -->
</div>
<?php include ('inc/dept-modals.php'); ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>