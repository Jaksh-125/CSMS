<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>

  <title>Car Showroom Management System / Compare</title>

  <link rel="stylesheet" href="assets/css/master.css">
  <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->


</head>

<body class="page">


  <!-- Loader-->
  <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
  <!-- Loader end-->


  <?php include_once('includes/header.php'); ?>
  <!-- end .header-->
  <div class="section-title-page area-bg area-bg_dark area-bg_op_60">
    <div class="area-bg__inner">
      <div class="container">
        <div class="row">
          <div class="col offset-lg-3">
            <div class="b-title-page__wrap">
              <h1 class="b-title-page">Compare Cars</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Compare Cars</li>
                </ol>
                <!-- end breadcrumb-->
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end .b-title-page-->

  <!-- <div class="section-default bg-light"> -->

  <!-- </div> -->
  <!-- <section class="section-about section-default"> -->
  <div class="container">
    <div class="row">
      <div class="col-xl-6">
        <div class="ui-title-slogan"></div>
      </div>
    </div>


    <!-- Compare cars -->



    <h3 class="widget-title bg-dark"><i class="ic flaticon-car-4"></i>Compare Car</h3>
    <div class="Compare1" style="width: 300px;">

      <div class="widget-content">
        <div class="widget-inner">

          <!-- Car Form 1 -->
          <!-- <br> -->
          <div class="container">
            <form class="b-filter bg-light" method="post" name="search" action="car-search.php">
              <h3>Select First Car for compare</h3>

              <div class="b-filter__main">
                <div class="b-filter__row">

                  <select class="selectpicker" data-width="100%" name="company" id="company" required="true" data-style="ui-select">
                    <option value="">Select Company</option>
                    <?php
                    $query1 = mysqli_query($con, "select CompanyName from tblcompany");
                    while ($row1 = mysqli_fetch_array($query1)) {


                    ?>
                      <option><?php echo $row1['CompanyName']; ?></option> <?php } ?>

                  </select>
                </div>

                <div class="b-filter__row">
                  <select class="selectpicker" data-width="100%" data-style="ui-select" name="model" required="true">
                    <option value="">Select Model</option>
                    <?php
                    $query2 = mysqli_query($con, "select CarModel from tblcars");
                    while ($row2 = mysqli_fetch_array($query2)) {


                    ?>
                      <option><?php echo $row2['CarModel']; ?></option><?php } ?>

                  </select>
                </div>
                <div class="b-filter__row">
                  <select class="selectpicker" data-width="100%" title="Car Type" name="cartype" id="cartype" required="true" data-style="ui-select">
                    <option value="">Select Car Type</option>
                    <?php
                    $query3 = mysqli_query($con, "select distinct CarType from tblcars");
                    while ($row3 = mysqli_fetch_array($query3)) {

                    ?>
                      <option><?php echo $row3['CarType']; ?></option><?php } ?>
                  </select>
                </div>

                
                        <br><br>

                <!-- Form 2 -->
                <div class="b-filter__row">
                <h3>Select Second Car for compare</h3>

                  <select class="selectpicker" data-width="100%" name="companyTwo" id="companyTwo" required="true" data-style="ui-select">
                    <option value="">Select Company</option>
                    <?php
                    $query1 = mysqli_query($con, "select CompanyName from tblcompany");
                    while ($row1 = mysqli_fetch_array($query1)) {


                    ?>
                      <option><?php echo $row1['CompanyName']; ?></option> <?php } ?>

                  </select>
                </div>

                <div class="b-filter__row">
                  <select class="selectpicker" data-width="100%" data-style="ui-select" name="modelTwo" required="true">
                    <option value="">Select Model</option>
                    <?php
                    $query2 = mysqli_query($con, "select CarModel from tblcars");
                    while ($row2 = mysqli_fetch_array($query2)) {


                    ?>
                      <option><?php echo $row2['CarModel']; ?></option><?php } ?>

                  </select>
                </div>
                <div class="b-filter__row">
                  <select class="selectpicker" data-width="100%" title="Car Type" name="cartypeTwo" id="cartypeTwo" required="true" data-style="ui-select">
                    <option value="">Select Car Type</option>
                    <?php
                    $query3 = mysqli_query($con, "select distinct CarType from tblcars");
                    while ($row3 = mysqli_fetch_array($query3)) {

                    ?>
                      <option><?php echo $row3['CarType']; ?></option><?php } ?>
                  </select>
                </div>
                
                <button class="btn btn-primary w-100" type="submit" name="search">show results</button> 
              </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  </div>
  </div>
  </div>

  </div>


  <!-- end layout-theme-->


  <!-- ++++++++++++-->
  <!-- MAIN SCRIPTS-->
  <!-- ++++++++++++-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
  <!-- Bootstrap-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Select customization & Color scheme-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.5/js/bootstrap-select.min.js"></script>
  <!-- Pop-up window-->
  <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Headers scripts-->
  <script src="assets/plugins/headers/slidebar.js"></script>
  <script src="assets/plugins/headers/header.js"></script>
  <!-- Mail scripts-->
  <script src="assets/plugins/jqBootstrapValidation.js"></script>
  <script src="assets/plugins/contact_me.js"></script>
  <!-- Video player-->
  <script src="assets/plugins/flowplayer/flowplayer.min.js"></script>
  <!-- Filter and sorting images-->
  <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/plugins/isotope/imagesLoaded.js"></script>
  <!-- Progress numbers-->
  <script src="assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
  <script src="assets/plugins/rendro-easy-pie-chart/jquery.waypoints.min.js"></script>
  <!-- Animations-->
  <script src="assets/plugins/scrollreveal/scrollreveal.min.js"></script>
  <!-- Scale images-->
  <script src="assets/plugins/ofi.min.js"></script>
  <!--Sliders-->
  <script src="assets/plugins/slick/slick.js"></script>
  <!-- User customization-->
  <script src="assets/js/custom.js"></script>
</body>

</html>