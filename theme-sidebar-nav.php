
<?php
  
  $title = 'CPCC Theme with Sidebar';

  $pageName = 'CPCC Theme with Sidebar';
  
  $navItems = file_get_contents('inc/mainNav.php');
  
  $sidebar = 'sidebar';
    
  include('inc/headcode.php'); 

  include('inc/ribbon-header-nav.php') 

?>

<div class="row">

 
<div class="container inner"> <!-- for layouts with no search appliance, add a class of .sidebar-nosearch here and delete the search appliance -->
<div class="row">
  <?php include('inc/sidebar.php'); ?>


<div class="col-sm-9 main-content">



<h1>Heading One</h1>
<?php include('inc/mediacontent.php'); ?>
   
</div><!-- /.main-content -->
  </div>
</div>

</div><!-- /.container.inner -->

</div>
<?php include ('inc/footer.php'); ?>

</html>