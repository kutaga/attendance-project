<!DOCTYPE html>
<html lang="en">
<head>
    <title>Attendance</title>
  	<?php
    include("pages/meta.php");
    include("pages/external_css.php")
    ?>
</head>
<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper theme-1-active pimary-color-green">

        <!-- Top Menu Items -->
	  <?php
    include("pages/top_menu.php");
    ?>
		<!-- /Top Menu Items -->

		<!-- Left Sidebar Menu -->
	  <?php
    include("pages/left_side_menu.php");
    ?>
		<!-- /Left Sidebar Menu -->

		<!-- Right Sidebar Menu -->
		<?php
    include("pages/right_side_menu.php");
     ?>
		<!-- /Right Sidebar Menu -->

		<!-- Right Setting Menu -->
	  <?php
    include("pages/setting_menu.php");
     ?>
		<!-- /Right Sidebar Backdrop -->

		<!-- Main Content -->
		<div class="page-wrapper">
      <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">blank page</h5>
          </div>
          <!-- Breadcrumb -->
          <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
              <li class="active">
                <a href="index.php">Home</a>
              </li>
            </ol>
          </div>
          <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

				<!-- Footer -->
		    <?php
          include("pages/footer.php");
        ?>
			</div>
		</div>
    </div>
    <?php
    include("pages/eternal_javascript.php");
     ?>
</body>
</html>
