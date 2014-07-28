
<?php
  
  $title = 'Cato Building | Cato Campus | CPCC Public Directory';

  $pageName = 'Cato Building';
  
  $sidebar = '';
  
  $navItems = '<div class="col-xs-1 pull-left lpad0">
    <a href="campus-cato.php" class="btn btn-default btn-md pull-left nav-btn-lft"><span class="glyphicon glyphicon-arrow-left"></span></a></div>
    <div class="col-xs-10 nav-header"><h1>' . $pageName . '</h1></div>
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
        <embed src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d814.4129458560453!2d-80.7313021158634!3d35.26491782650288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1396e8f143abe921!2sCato+Middle+College+High+School!5e0!3m2!1sen!2sus!4v1401394303480" width="100%" height="300px" frameborder="0" style="border:0"></embed>
        </div>
        <h3>About <?php echo $pageName ?></h3>
        <p>Cato I opened in 2002 with approximately 48,000 square feet of classrooms, computer labs, offices, and student services, as well as a bookstore and Law Library. Also included in the first phase was the opening of a 7,500 square foot Horticulture building and a 4,500 square foot attached greenhouse. Using 2,000 state bonds, Cato II opened in 2007, bringing an additional 48,000 square feet of classrooms, offices, a full-service library and the Cato Middle College High School. In 2011, Cato II was renovated to include an expanded Bookstore, Café, Student Life Center and study areas in the Learning Lounge.</p>
      </div>
      
</div>
  </div>
  <div class="panel panel-default">
  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
    <div class="panel-heading">
      <h4 class="panel-title">
          Programs at <?php echo $pageName ?>
      </h4>
    </div>
    </a>
    <div id="collapseTwo" class="panel-collapse collapse">
      <?php include('inc/programs.php') ?>
    </div>
  </div>
  <div class="panel panel-default">
   <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
    <div class="panel-heading">
      <h4 class="panel-title">
          Available Services
          </h4>
    </div>
    </a>
    <div id="collapseThree" class="panel-collapse collapse">
        <!-- Table -->
   <table class="table">
        <thead class="tetrad-blue-gradient">
          <tr>
            <th>Service</th>
            <th>Room</th>
            <th>Phone</th>
            <th>Message</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Admissions</td>
            <td>121</td>
            <td><a href="tel:7043304841" title="Call Cato Campus Admissions Office" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-phone-alt"></span><span class="lg-only">&nbsp;4841</span></a></td>
            <td><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#4841Modal"><span class="glyphicon glyphicon-envelope"></span><span class="lg-only">&nbsp;Contact</span></button>
          </tr>
          <tr>
            <td>Cashiering Ofﬁce</td>
            <td>121</td>
            <td><a href="tel:7043304842" title="Call CPCC Accounts Payable" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-phone-alt"></span><span class="lg-only">&nbsp;4842</span></a></td>
            <td><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#4842Modal"><span class="glyphicon glyphicon-envelope"></span><span class="lg-only">&nbsp;Contact</span></button>
                </td>
          </tr>
          <tr>
            <td>Financial Aid</td>
            <td>108</td>
            <td><a href="tel:7043306942" title="Call CPCC Administrative Services" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-phone-alt"></span><span class="lg-only">&nbsp;6942</span></a></td>
            <td><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#6942Modal"><span class="glyphicon glyphicon-envelope"></span><span class="lg-only">&nbsp;Contact</span></button>

                </td>
          </tr>
        </tbody>
      </table>
    </div>
   </div> 
</div>

    



</div><!-- /.container.main -->
</div>

<?php include ('inc/bldg-modals.php'); ?>

<?php include ('inc/footer.php'); ?>

</html>