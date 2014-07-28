
<?php
  
  $title = 'CPCC Theme with Sidebar';

  $pageName = 'CPCC Theme with Sidebar';
  
  $navItems = file_get_contents('inc/mainNav.php');
  
  $sidebar = 'sidebar';
  
  $logo = 'logo';
    
  include('inc/headcode.php'); 

  include('inc/ribbon-header-nav-logo.php') 

?>


<div class="row">

 
<div class="container inner sidebar1">
<div class="row">
  <div class="col-sm-3 sidenav">
    <div class="sidebar-nav sidebar-content">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header center-text">
          <h3 class="visible-xs">Sidebar Menu</h3>
          <!-- Seach Appliance -->
            <div class="input-group lg-only bmargin25">
              <input type="text" class="form-control input-lg" placeholder="Search">
              <span class="input-group-btn">
                <button class="btn btn-default btn-lg" type="button"><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div><!-- /input-group -->
        </div><!-- /.navbar-header -->
        
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
    <div class="panel-heading">
      <h4 class="panel-title">
          Section 1
      </h4>
    </div>
    </a>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="list-group">
          <a href="#" class="list-group-item">Subsection 1</a>
          <a href="#" class="list-group-item">Subsection 2</a>
          <a href="#" class="list-group-item">Subsection 3</a>
          <a href="#" class="list-group-item">Subsection 4</a>
          <a href="#" class="list-group-item">Subsection 5</a>
          <a href="#" class="list-group-item">Subsection 6</a>
        </div>
	</div>
  </div>
  <div class="panel panel-default">
  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
    <div class="panel-heading">
      <h4 class="panel-title">
          Section 2
      </h4>
    </div>
    </a>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="list-group">
          <a href="#" class="list-group-item">Subsection 1</a>
          <a href="#" class="list-group-item">Subsection 2</a>
          <a href="#" class="list-group-item">Subsection 3</a>
          <a href="#" class="list-group-item">Subsection 4</a>
          <a href="#" class="list-group-item">Subsection 5</a>
          <a href="#" class="list-group-item">Subsection 6</a>
          <a href="#" class="list-group-item">Subsection 7</a>
          <a href="#" class="list-group-item">Subsection 8</a>
        </div>
    </div>
  </div>
  <div class="panel panel-default">
  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
    <div class="panel-heading">
      <h4 class="panel-title">
          Section 3
      </h4>
    </div>
  </a>
  <div id="collapseThree" class="panel-collapse collapse">
  </div>
  </div>
<div class="panel panel-default">
  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
    <div class="panel-heading">
      <h4 class="panel-title">
          Section 4
      </h4>
    </div>
    </a>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="list-group">
          <a href="#" class="list-group-item">Subsection 1</a>
          <a href="#" class="list-group-item">Subsection 2</a>
          <a href="#" class="list-group-item">Subsection 3</a>
        </div>
    </div>
  </div>  
<div class="panel panel-default">
  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
    <div class="panel-heading">
      <h4 class="panel-title">
          Section 5
      </h4>
    </div>
    </a>
  <div id="collapseFive" class="panel-collapse collapse">
  </div>
  </div>  
<div class="panel panel-default">
  <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
    <div class="panel-heading">
      <h4 class="panel-title">
          Section 6
      </h4>
    </div>
    </a>
    <div id="collapseSix" class="panel-collapse collapse">
      <div class="list-group">
          <a href="#" class="list-group-item">Subsection 1</a>
          <a href="#" class="list-group-item">Subsection 2</a>
          <a href="#" class="list-group-item">Subsection 3</a>
          <a href="#" class="list-group-item">Subsection 4</a>
          <a href="#" class="list-group-item">Subsection 5</a>
          <a href="#" class="list-group-item">Subsection 6</a>
          <a href="#" class="list-group-item">Subsection 7</a>
          <a href="#" class="list-group-item">Subsection 8</a>
        </div>
    </div>
  </div>  
<div class="panel panel-default">
  <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
    <div class="panel-heading">
      <h4 class="panel-title">
          Section 7
      </h4>
    </div>
    </a>
    <div id="collapseSeven" class="panel-collapse collapse">
      <div class="list-group">
          <a href="#" class="list-group-item">Subsection 1</a>
          <a href="#" class="list-group-item">Subsection 2</a>
        </div>
    </div>
  </div>  
</div><!-- /.sidebar -->
</div><!-- /.navbar-collapse-3 -->
        </div><!--/.nav-collapse -->
      </div>


<div class="col-sm-9 main-content">



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