<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />
<!--<link rel="stylesheet" type="text/css" href="yaron.css" media="screen" />-->

<link rel="stylesheet" type="text/css" href="foundation.css" media="screen" />

<link rel="stylesheet" type="text/css" href="foundation.min.css.css" media="screen" />
<link rel="stylesheet" type="text/css" href="normalize.css" media="screen" />


<title>1stWebDesigner PHP Template</title>

</head>

	<body>

		<div id="wrapper">

<?php include('includes/header.php'); ?>


<?php include(includes/nav.php); ?>
<!-- Navigation -->
 
  <nav class="top-bar">
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <h1>
          <a href="#">
            Top Bar Title
          </a>
        </h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
    </ul>
 
    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">Main Item 1</a>
          <ul class="dropdown">
            <li><label>Section Name</label></li>
            <li class="has-dropdown">
              <a href="#" class="">Has Dropdown, Level 1</a>
              <ul class="dropdown">
                <li><a href="#">Dropdown Options</a></li>
                <li><a href="#">Dropdown Options</a></li>
                <li><a href="#">Level 2</a></li>
                <li><a href="#">Subdropdown Option</a></li>
                <li><a href="#">Subdropdown Option</a></li>
                <li><a href="#">Subdropdown Option</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li class="divider"></li>
            <li><label>Section Name</label></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li class="divider"></li>
            <li><a href="#">See all &rarr;</a></li>
          </ul>
        </li>
        <li class="divider"></li>
        <li><a href="#">Main Item 2</a></li>
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">Main Item 3</a>
          <ul class="dropdown">
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li class="divider"></li>
            <li><a href="#">See all &rarr;</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </nav>



  <!-- End Top Bar -->
 
  <div class="row">
    <div class="large-12 columns">
 
    <!-- Content Slider -->
 
      <div class="row">
        <div class="large-12 hide-for-small">
 
          <div id="featured" data-orbit>
              <img src="img/volcano-920-3.jpg" alt="slide image">
              <img src="http://placehold.it/1200x500&text=Slide Image 2" alt="slide image">
              <img src="http://placehold.it/1200x500&text=Slide Image 3" alt="slide image">
            </div>
 
      </div>
    </div>
 
    <!-- End Content Slider -->
 
    <!-- Mobile Header -->
 
      <div class="row">
        <div class="large-12 columns show-for-small">
 
          <img src="http://placehold.it/1200x700&text=Mobile Header">
 
        </div>
      </div><br>
 
    <!-- End Mobile Header -->
 
 
      <div class="row">
        <div class="large-12 columns">
          <div class="row">
            <!-- Shows -->
            <div class="large-4 small-6 columns">
 
              <h4>Upcoming Shows</h4><hr>
 
              <div class="row">
                <div class="large-1 column">
                  <img src="http://placehold.it/50x50&amp;text=[img]">
                </div>
 
                <div class="large-9 columns">
                  <h5><a href="#">Venue Name</a></h5>
                  <h6 class="subheader show-for-small">Doors at 00:00pm</h6>
                </div>
              </div><hr>
 
              <div class="hide-for-small">
                <div class="row">
                  <div class="large-1 column">
                    <img src="http://placehold.it/50x50&amp;text=[img]">
                  </div>
 
                  <div class="large-9 columns">
                    <h5 class="subheader"><a href="#">Venue Name</a></h5>
                  </div>
                </div><hr>
 
                <div class="row">
                  <div class="large-1 column">
                    <img src="http://placehold.it/50x50&amp;text=[img]">
                  </div>
 
                  <div class="large-9 columns">
                    <h5 class="subheader"><a href="#">Venue Name</a></h5>
                  </div>
                </div><hr>
 
                <div class="row">
                  <div class="large-1 column">
                    <img src="http://placehold.it/50x50&amp;text=[img]">
                  </div>
 
                  <div class="large-9 columns">
                    <h5 class="subheader"><a href="#">Venue Name</a></h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Shows -->
 
 
            <!-- Image -->
 
            <div class="large-4 small-6 columns">
              <img src="http://placehold.it/300x465&amp;text=Image">
            </div>
 
            <!-- End Image -->
 
 
            <!-- Feed -->
 
            <div class="large-4 small-12 columns">
 
              <h4>Blog</h4><hr>
              <div class="panel">
                <h5><a href="#">Post Title 1</a></h5>
 
                <h6 class="subheader">
                  Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Suspendisse ultrices ornare tempor...
                </h6>
 
                <h6><a href="#">Read More »</a></h6>
              </div>
 
              <div class="panel hide-for-small">
                <h5><a href="#">Post Title 2 »</a></h5>
              </div>
 
              <div class="panel hide-for-small">
                <h5><a href="#">Post Title 3 »</a></h5>
              </div>
 
              <a href="#" class="right">Go To Blog »</a>
 
            </div>

            
 
            <!-- End Feed -->
 
          </div>
        </div>
      </div>
 
    <!-- End Content -->



<?php include('includes/sidebar.php'); ?>
<?php include('includes/footer.php'); ?>



		</div> <!-- End #wrapper -->

	</body>

</html>
