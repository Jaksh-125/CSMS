  <aside class="l-sidebar">
    <div class="widget section-sidebar bg-light">

      <h3 class="widget-title bg-dark"><i class="ic flaticon-car-4"></i>Search a car</h3>
      <div class="widget-content">
        <div class="widget-inner">
          <form class="b-filter bg-light" method="post" name="search" action="car-search.php">

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
                <select class="selectpicker" data-style="ui-select" name="model" required="true">
                  <option value="">Select Model</option>
                  <?php
                  $query2 = mysqli_query($con, "select CarModel from tblcars");
                  while ($row2 = mysqli_fetch_array($query2)) {


                  ?>
                    <option><?php echo $row2['CarModel']; ?></option><?php } ?>

                </select>
              </div>
              <div class="b-filter__row">
                <select class="selectpicker" title="Car Type" name="cartype" id="cartype" required="true" data-style="ui-select">
                  <option value="">Select Car Type</option>
                  <?php
                  $query3 = mysqli_query($con, "select distinct CarType from tblcars");
                  while ($row3 = mysqli_fetch_array($query3)) {


                  ?>
                    <option><?php echo $row3['CarType']; ?></option><?php } ?>
                </select>
              </div>
              

            <button class="btn btn-primary w-100" type="submit" name="search">show results</button>
          </form>
        </div>
      </div>
    </div>
    <!-- end .b-filter-->
    <section class="widget b-brands section-sidebar">

      <h3 class="widget-title bg-dark"><i class="ic flaticon-car-4"></i>Popular brands</h3>
      <div class="widget-content">

        <div class="b-brands__main d-flex flex-wrap">
          <?php
          $queryimg = mysqli_query($con, "select CompanyImage,CompanyName from tblcompany order by rand() limit 8");
          while ($rowimg = mysqli_fetch_array($queryimg)) {
          ?>
            <a href="companywise-cars.php?crname=<?php echo $row['CompanyName']; ?>">
              <img src="admin/images/<?php echo $rowimg['CompanyImage']; ?>" width='112' height='51' style="border:solid #000 1px; margin-top:4%; margin-left:6%" /></a>
          <?php } ?>
        </div>

      </div>
    </section>

  </aside>