  <?php
    $banner = New banner();
    $singlebanner = $banner->get_banner(1);
  ?>
  <section id="banner">
  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/PESO SAN JUAN BANNER.jpg" alt="" />
                <div class="flex-caption">
                </div>
              </li>
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/transparent.png" alt="" />
                <div class="flex-caption">
                </div>
              </li>
              <li>
                <img src="<?php echo web_root.'admin/banner/'. $singlebanner->bannerlocation;?>" alt="" />
              </li>
            </ul>
        </div>
  <!-- end slider -->
  </section> 
  <section id="call-to-action-2">
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-10 col-sm-9">
          <h3>Partner with Business Leaders</h3>
          <p>Development of successful, long term, strategic relationships between customers and suppliers, based on achieving best practice and sustainable competitive advantage. In the business partner model, HR professionals work closely with business leaders and line managers to achieve shared organisational objectives.</p>
        </div> -->
       <!--  <div class="col-md-2 col-sm-3">
          <a href="#" class="btn btn-primary">Read More</a>
        </div> -->
      </div>
    </div>
  </section>
  
  <section id="content">
  
  
  <div class="container">
        <div class="row">
      <div class="col-md-12">
        <div class="aligncenter"><h2 class="aligncenter">Company</h2><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.. --></div>
        <br/>
      </div>
    </div>
    <div class="row">
            <?php 
                  $sql = "SELECT * FROM `tblcompany`";
                  $mydb->setQuery($sql);
                  $comp = $mydb->loadResultList(); 

                  foreach ($comp as $company ) { 
            ?>
                    <div class="col-sm-4 info-blocks">
                        <i class="icon-info-blocks fa fa-building-o"></i>
                        <div class="info-blocks-in">
                            <h3><?php echo '<a href="'.web_root.'index.php?q=hiring&search='.$company->COMPANYNAME.'">'.$company->COMPANYNAME.'</a>';?></h3>
                            <!-- <p><?php echo $company->COMPANYMISSION;?></p> -->
                            <p>Address :<?php echo $company->COMPANYADDRESS;?></p>
                            <p>Contact No. :<?php echo $company->COMPANYCONTACTNO;?></p>
                        </div>
                    </div>

            <?php } ?>

 
 
         </div> 
        </div>
  </div>
  </section>
  
  <section class="section-padding gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 >Popular Jobs</h2>  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <?php 
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
            }
          ?>
        </div>
      </div>
    </div>
  </section>

<style type="text/css">

  .medium-size {
      max-width: 2000%; /* Adjust the percentage as needed */
      height: auto;
  }

  #banner {
      text-align: center;
      background:linear-gradient(0deg, rgba(255, 0, 125, 0.3), rgba(255, 0, 150, 0.3)), url(https://lh4.googleusercontent.com/y945EKYrkiv7wYcRMRVXwH68cPlLadrAsXAbAccGopn7dH7tUZwogh19z0XrnExgazpp13Ft72hmvEgcPb7TRc8=w16383);
      background-size:cover;
      
  }

  #main-slider {
      margin: 0 auto;
      max-width: 1000px; /* Adjust the maximum width as needed */
  }


</style>