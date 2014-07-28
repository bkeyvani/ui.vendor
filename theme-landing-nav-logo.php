
<?php
  
  $title = 'CPCC Theme Landing Page';

  $pageName = 'CPCC Theme Landing Page';
  
  $navItems = file_get_contents('inc/mainNav-landing.php');
  
  $sidebar = '';
  
  $logo = 'logo';
    
  include('inc/headcode.php'); 

  include('inc/ribbon-header-nav-logo.php'); 

?>


<div class="row">

 
<div class="container inner">

<div class="main-content">



<h1>Heading One</h1>
<h3 class="subtitle">Heading Three Style as Subtitle</h3>
<p>Compellingly maintain business deliverables before distinctive relationships. Conveniently create enterprise-wide applications with mission-critical quality vectors. Intrinsicly facilitate optimal architectures vis-a-vis premier processes. </p>
<p>Energistically mesh B2B ideas and long-term high-impact best practices. Seamlessly target enterprise-wide outsourcing after effective total linkage. Competently deliver fully tested process improvements and front-end testing procedures.</p>
<h3>Heading Three Independent of Heading One</h3>
<p>Compellingly maintain business deliverables before distinctive relationships. Conveniently create enterprise-wide applications with mission-critical quality vectors. Intrinsicly facilitate optimal architectures vis-a-vis premier processes. </p>
<p>Energistically mesh B2B ideas and long-term high-impact best practices. Seamlessly target enterprise-wide outsourcing after effective total linkage. Competently deliver fully tested process improvements and front-end testing procedures.</p>
 
    
</div><!-- /.main-content -->
  </div>
</div>

</div><!-- /.container.inner -->

</div>
<?php include ('inc/footer.php'); ?>

</html>