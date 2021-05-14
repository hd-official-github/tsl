<style>
   #header.transparent-nav .header-base .top-panel .container .inner-wrap #header-mobile-nav-opener:not(.hamburger-slide-in) span:after,
   #header.transparent-nav .header-base .top-panel .container .inner-wrap #header-mobile-nav-opener:not(.hamburger-slide-in):before,
   #header.transparent-nav .header-base .top-panel .container .inner-wrap #header-mobile-nav-opener:not(.hamburger-slide-in):after,
   #header.transparent-nav .header-base .top-panel .container .inner-wrap #header-mobile-nav-opener:not(.hamburger-slide-in) span {
   background: #000;
   }
</style>
</div>
</div>
<div class="wrapper-content wrapper-content--ud" infinite-scroll="">
<div class="container-fluid" style=' margin-top:-29px;'>
   <div class="row" style='max-height:500px;'>
      <?php $c = count($image->result());
         if ($c == 1) { ?>
      <div class="col-sm-12 first-img" style='max-height:500px'>
         <img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php foreach ($image->result() as $row) {
            echo $row->image_url;
            break;
            } ?>" alt="" style='height:100%; width:100%'>
      </div>
      <?php } else if ($c == 2) { ?>
      <div class="col-sm-8 first-img" style='max-height:500px'>
         <img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php foreach ($image->result() as $row) {
            echo $row->image_url;
            break;
            } ?>" alt="" style='height:100%; width:100%'>
      </div>
      <div class="col-sm-4 sec-img" style="max-height: 500px;">
         <img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php $a = 1;
            foreach ($image->result() as $row) {
               if ($a == 2) {
                  echo $row->image_url;
                  break;
               }
               $a++;
            } ?>" alt="" style='height:100%; width:100%'>
      </div>
      <?php } else if ($c == 0) { ?>
      <div class="col-sm-12 first-img" style='max-height:500px'>
         <img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php foreach ($details->result() as $row) {
            echo $row->main_image;
            break;
            } ?>" alt="" style='height:100%; width:100%'>
      </div>
      <?php } else if ($c == 3) { ?>
      <div class="col-sm-8 first-img" style='max-height:500px'>
         <img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php foreach ($image->result() as $row) {
            echo $row->image_url;
            break;
            } ?>" alt="" style='height:100%; width:100%'>
      </div>
      <div class="col-sm-4 sec-img" style="max-height: 250px;">
         <img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php $a = 0;
            foreach ($image->result() as $row) {
               if ($a == 1) {
                  echo $row->image_url;
                  break;
               }
               $a++;
            } ?>" alt="" style='height:100%; width:100%'>
         <div class="row mt-4" style="max-height: 250px;">
            <div class="col-sm-12 th-img" style="max-height: 250px;"><img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php $a = 0;
               foreach ($image->result() as $row) {
                  if ($a == 2) {
                     echo $row->image_url;
                     break;
                  }
                  $a++;
               } ?>" alt="" style='height:94%; width:100%'></div>
         </div>
         <?php } else if ($c == 4) { ?>
         
         <div class="col-sm-8 first-img gallery" style='max-height:500px;'>
         <img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php foreach ($image->result() as $row) {
               echo $row->image_url;
               break;
               } ?>" alt="" style='height:100%; width:100%;'>
         </div>
         <div class="col-sm-4 sec-img gallery" style="max-height: 250px;">
            <img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php $a = 1;
               foreach ($image->result() as $row) {
                  if ($a == 2) {
                     echo $row->image_url;
                     break;
                  }
                  $a++;
               } ?>" alt="" style='height:100%; width:100%'>
            <div class="row mt-4" style="max-height: 250px;">
               <div class="col-sm-6 th-img gallery" style="max-height: 250px;"><img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php $b = 0;
                  foreach ($image->result() as $row) {
                  if ($b == 2) {
                     echo $row->image_url;
                     break;
                  }
                  $b++;
                  } ?>" alt="" style='height:94%; width:100%'></div>
               <div class="col-sm-6 forth-img gallery " style="max-height: 250px;"><img  onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php $c = 0;
                  foreach ($image->result() as $row) {
                  if ($c == 3) {                                                                 echo $row->image_url;                                                                   break;                                                                             }
                  $c++;} ?>" alt="" style='height:94%; width:100%'></div>
            </div>
         
            <?php } else { ?>
               <div class="col-sm-8 first-img gallery" style='max-height:500px;'>
         <img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php foreach ($image->result() as $row) {
               echo $row->image_url;
               break;
               } ?>" alt="" style='height:100%; width:100%;'>
         </div>
         <div class="col-sm-4 sec-img gallery" style="max-height: 250px;">
            <img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php $a = 1;
               foreach ($image->result() as $row) {
                  if ($a == 2) {
                     echo $row->image_url;
                     break;
                  }
                  $a++;
               } ?>" alt="" style='height:100%; width:100%'>
            <div class="row mt-4" style="max-height: 250px;">
               <div class="col-sm-6 th-img gallery" style="max-height: 250px;"><img onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php $b = 0;
                  foreach ($image->result() as $row) {
                  if ($b == 2) {
                     echo $row->image_url;
                     break;
                  }
                  $b++;
                  } ?>" alt="" style='height:94%; width:100%'></div>
               <div class="col-sm-6 forth-img gallery " style="max-height: 250px;"><img  onclick="openModal();currentSlide(1)" class="hover-shadow cursor" src="<?php $c = 0;
                  foreach ($image->result() as $row) {
                  if ($c == 3) {                                                                 echo $row->image_url;                                                                   break;                                                                             }
                  $c++;} ?>" alt="" style='height:94%; width:100%'></div>
            </div>
               
               <?php }?>
         </div>
      </div>
      <div class="wrapper main-cont" style='margin-top:-80px'>
         <!-- <div class='container breadcrab'>
            <div class="breadcrumbs-nav">
            <?php foreach ($details->result() as $row) { ?>
            <nav class="fl-row">
            <a class="text-uppercase text-decoration-none" href="<?php echo base_url(); ?>">thespaline</a>
            <a class="text-uppercase text-decoration-none" href="">Deals in <?php echo $row->sub_location; ?></a>
            <a class="text-uppercase cursor-default text-decoration-none" href=""><?php echo $row->business_name; ?></a>
            </nav>
            <?php } ?>
            < /div>
            
            </div> -->
         <!-- <div class="bg-white p-3 chead secondhead " style='margin-top:-20px; width:100%;'>
            <div class='row'>
            <div class="col-sm-12">
            <img src="<?php echo base_url() . 'assets/images/backward.png'; ?>" class='spainBang' style='top:0px'>
            <h3 style="position:relative; left:29px;">Best Spa in <?php foreach ($details->result() as $row) {
               echo $row->sub_location;
               } ?></h3>
            </div>
            </div>
            </div> -->
         <!-- /////the bottom row  -->
         <div class="container mt-5 p-0 align-center f-detail" style="margin-bottom:-224px;">
            <div class="row">
               <div class="col-sm-8 card-info" style="padding-left:0px !important; margin-top:75px;">
                  <!-- <div class="col-sm-8" style="display: contents;">
                     <div class="multi-line-header multi-line-header--centered" style="">
                     <div class="multi-line-header__title" style='letter-spacing:1px;'>
                     DETAILS
                     </div>
                     </div>
                     </div> -->
                  <promo-slider>
                     <?php foreach ($details->result() as $row) { ?>
                     <div class="position-relative  promo-slider-wrapper" style='box-shadow: 0 0 16px rgb(0 0 0 / 4%); border-radius:5px;'>
                        <div class="all-promo-wrapper">
                           <div class="promo-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0.6s;">
                              <div>
                                 <promo-card initindex="1">
                                    <div class="promo" ga-impression="">
                                       <div class="block margin-reset clearfix overflow-hidden" style="border:none;">
                                          <div class="block__inner local-promo">
                                             <div class="multi-line-header multi-line-header--centered">
                                                <div class="" style='letter-spacing:1px; text-align:left; margin-left:10px; font-size:25px; font-weight:700'>
                                                   <?php echo $row->business_name; ?>
                                                </div>
                                             </div>
                                             <div style="margin-left:13px;" class="mt-4">
                                                <div class="promo__title">
                                                   <merchant-rating>
                                                      <div class="margin-right-s card-rating__listing" style="margin-top: -8px; margin-left:-10px;">
                                                         <div class="card-rating margin-bottom-zero nb--4-5">
                                                            <img alt="nb" class="card-rating__nb" height="10" src="<?php echo base_url() . 'assets/images/sl_icon.png'; ?>" data-lzled="true">
                                                            <span class="card-rating__img"></span>
                                                            <span class="card-rating__value font-weight-bold line-height-default" style='font-size:small;'><?php echo $row->rating; ?></span>
                                                            <span><a class='text-decoration-none font-weight-bold' style='color: #010101; font-size:small; margin-left:5px;'></a></span>
                                                         </div>
                                                      </div>
                                                   </merchant-rating>
                                                </div>
                                                <p class="txt-primary font-weight-bold white-space-normal" style="font-size:20px; margin-top:10px;">Overview</p>
                                                <div class='txt-primary white-space-normal text-overview'><?php echo $row->about; ?></div>
                                                <div>
                                                   <img src="<?php echo base_url() . 'assets/images/duration.png'; ?>" alt="" class='dur'>
                                                   <span class='txt-primary font-weight-bold white-space-normal inline'> Suggested Duration: </span> <span style='margin-left:120px;padding:7px;margin-top:8px; font-size:12px;display:inline-block; '><?php echo $row->opening_hours; ?></span>
                                                </div>
                                                <div>
                                                   <img src="<?php echo base_url() . 'assets/images/location.png'; ?>" alt="" class='dur'>
                                                   <span class='txt-primary font-weight-bold white-space-normal inline'> Address: </span> <span style='margin-left:50px;padding:7px;margin-top:8px; font-size:12px;display:inline-block; '> <?php echo $row->address; ?></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </promo-card>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                  </promo-slider>
               </div>
               <div class="col-sm-4 price_n_dis">
                  <span>
                     <div>
                        <h4 style="color: lightgrey;">Starting from <strike>INR 22000</strike></h4>
                     </div>
                     <div class="rupees">
                        <h1 style="color:#f07c7c; display:inline;">INR 19,000</h1>
                     </div>
                  </span>
                  <br><br><br>
               </div>
               <div class="col-sm-4 get_in_touch">
                  <div class="row" style=" padding:12px; ">
                     <div class="form-group">
                        <h2>Get in touch with us</h2>
                        <label for="name"><strong>Name:</strong></label>
                        <input type="text" name='username' required class='form-control' placeholder="Enter Name">
                     </div>
                     <br><br>
                     <div class="form-group"><br>
                        <label for="name"><strong>Mobile No:</strong></label>
                        <input type="number" name='mobno' class='form-control' placeholder="Enter Mobile No." required>
                     </div>
                     <br>
                     <div class="form-group">
                        <br>
                        <label for="name"><strong>Email:</strong></label>
                        <input type="text" name='email' class='form-control' placeholder="Enter Email">
                     </div>
                     <br>
                     <div class="form-group"><br>
                        <input type="submit" class="view-more-btn" name='submit' class='btn' value='Send Enquiry' style="padding:0px 13px;">
                     </div>
                  </div>
               </div>
               <!-- <div class="col-sm-8 col-m-8 col-l-9 listing-grid card-carousel">
                  <div class="container p-0">
                  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner" style=" border-radius:5px; height:100%;">
                  <div class="carousel-item active">
                  <?php foreach ($details->result() as $row) { ?>
                  <img src="<?php echo $row->main_image; ?>" class="d-block w-100 " style="height:300px" alt="<?php echo $row->main_img_alt; ?>">
                  <?php } ?>
                  </div>
                  <?php foreach ($image->result() as $row) { ?>
                  <div class="carousel-item">
                  <img src="<?php echo $row->image_url; ?>" class="d-block w-100 " style="height:300px" alt="<?php echo $row->img_alt; ?>">
                  </div>
                  <?php } ?>
                  </div>
                  <button class="carousel-control-prev" style="margin-top:-20px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" style="margin-top:-20px;" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </button>
                  </div>
                  </div>
                  </div> -->
            </div>
         </div>
         <!-- /////the next row/// -->
         <div class="container f-ur">
            <div class="row padi">
               <div class="col-sm-8" style='width:757px;'>
                  <div class="container bg-white p-3" style='border-radius:5px; box-shadow:0 0 16px rgb(0 0 0 / 4%) '>
                     <div class="row" style='padding:10px;'>
                        <div class="multi-line-header multi-line-header--centered" style='margin-bottom:6px;'>
                           <div class="" style='letter-spacing:1px; text-align:left; margin-left:10px; font-size:25px; font-weight:700'>
                              FEATURES
                           </div>
                        </div>
                        <div class="col-sm-6 col-xs-6 col-md-6 ">
                           <?php foreach ($details->result() as $row) { ?>
                           <img src="<?php echo base_url() . 'assets/images/loc.png'; ?>" alt="" class='feature'>
                           <h3 class='fstate'><?php echo $row->features; ?></h3>
                           <br>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- ///location?/ -->
         <div class="container lc">
            <div class="row">
            </div>
            <div class="row p-0">
               <div class="col-sm-8 mt-3" style='height:auto; width:755px;'>
                  <div class="container bg-white" style='border-radius:5px; box-shadow:0 0 16px rgb(0 0 0 / 4%); padding:15px;'>
                     <div class="multi-line-header multi-line-header--centered">
                        <div class="" style='letter-spacing:1px; text-align:left; margin-left:10px; font-size:25px; font-weight:700'>
                           LOCATION
                        </div>
                     </div>
                     <div class="mapouter">
                        <div class="gmap_canvas" style='text-align:left'>
                           <?php foreach ($details->result() as $row) {
                              echo $row->map_loc;
                              } ?><br>
                           <style>
                              .mapouter {
                              position: relative;
                              text-align: right;
                              height: 319px;
                              width: auto;
                              padding-top: 0px;
                              padding-bottom: 5px;
                              }
                           </style>
                           <style>
                              .gmap_canvas {
                              overflow: hidden;
                              background: none !important;
                              height: 315px;
                              width: auto;
                              ;
                              padding-top: 0px;
                              padding-bottom: 5px;
                              }
                           </style>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-8 mt-3" style='width:755px;'>
                  <div class="container bg-white setheight" style='border-radius:5px; height:auto; box-shadow:0 0 16px rgb(0 0 0 / 4%); margin-top:13px;'>
                     <div class='row p-4'>
                        <div class="multi-line-header multi-line-header--centered mb-3">
                           <div class="" style='letter-spacing:1px; text-align:left; margin-left:10px; font-size:25px; font-weight:700'>
                              CONTACT US
                           </div>
                        </div>
                        <div class='col-sm-1 mt-1'>
                           <img src="<?php echo base_url() . 'assets/images/location.png'; ?>" style='height:30px; width:32px;'>
                        </div>
                        <?php foreach ($details->result() as $row) {  ?>
                        <div class='col-sm-11 mt-2'><span style='font-size:13px; text-align:justify;'><?php echo $row->address; ?></span>
                        </div>
                        <div class="row mt-1">
                           <div class='col-sm-1'>
                              <img src="<?php echo base_url() . 'assets/images/building.png'; ?>" style='height:30px; width:32px;'>
                           </div>
                           <div class='col-sm-11 mt-1'><span style='font-size:13px; text-align:justify;'><?php echo $row->location . '/ ' . $row->sub_location; ?></span>
                           </div>
                        </div>
                        <div class="row mt-1">
                           <div class='col-sm-1'>
                              <img src="<?php echo base_url() . 'assets/images/web.png'; ?>" style='height:30px; width:32px;'>
                           </div>
                           <div class='col-sm-11 mt-1'><span style='font-size:13px; text-align:justify;'>Visit on our website <a href="www.abc.com" class='text-decoration-none'><?php echo $row->website; ?></a></span>
                           </div>
                        </div>
                        <div class="row mt-1">
                           <div class='col-sm-1'>
                              <img src="<?php echo base_url() . 'assets/images/mail.png'; ?>" style='height:30px; width:32px;'>
                           </div>
                           <div class='col-sm-11 mt-1'><span style='font-size:13px; text-align:justify;'><?php echo $row->email; ?></span>
                           </div>
                        </div>
                        <div class="row mt-1">
                           <div class='col-sm-1'>
                              <img src="<?php echo base_url() . 'assets/images/tel.png'; ?>" style='height:30px; width:32px;'>
                           </div>
                           <div class='col-sm-11 mt-1'><span style='font-size:13px; text-align:justify;'><?php echo $row->mobno; ?></span>
                           </div>
                        </div>
                        <div class="row mt-1">
                           <div class='col-sm-1'>
                              <img src="<?php echo base_url() . 'assets/images/facebook.png'; ?>" style='height:30px; width:32px;'>
                           </div>
                           <div class='col-sm-11 mt-1'><a href="" class="text-decoration-none" style='font-size:13px; text-align:justify;'><?php echo $row->facebook; ?></a>
                           </div>
                        </div>
                        <div class="row mt-1">
                           <div class='col-sm-1'>
                              <img src="<?php echo base_url() . 'assets/images/twitter.png'; ?>" style='height:30px; width:32px;'>
                           </div>
                           <div class='col-sm-11 mt-1'><a href="" class="text-decoration-none" style='font-size:13px; text-align:justify;'><?php echo $row->twitter; ?></a>
                           </div>
                        </div>
                        <div class="row">
                           <div class='col-sm-1'>
                              <img src="<?php echo base_url() . 'assets/images/insta.png'; ?>" style='height:30px; width:32px;'>
                           </div>
                           <div class='col-sm-11'><a href="" class="text-decoration-none" style='font-size:13px; text-align:justify;'><?php echo $row->instagram; ?></a>
                           </div>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /////Review///// -->
         <!-- <div class="container fix-p" style="margin-top: 100px;">
            <div class="row">
            
            <div class="col-sm-8 fixpad">
            
            <div class="container bg-white p-3" style='border-radius:5px; box-shadow:0 0 16px rgb(0 0 0 / 4%); background:none; width:747px;'>
            <div class="multi-line-header multi-line-header--centered" style="display:inline-block;">
            <div class="" style='letter-spacing:1px; text-align:left; margin-left:10px; font-size:25px; font-weight:700'>
            REVIEW
            </div>
            </div>
            <a class='view-more-btn review-btn' style="width: 128px; height:auto; cursor:pointer; float:right;" onclick='getreview()'>Write a Review</a>
            </div>
            <div class="container bg-white review mt-2" style='display:none; padding:10px; border-radius:5px; box-shadow:0 0 16px rgb(0 0 0 / 4%); width:747px;'>
            <div class="col-sm-12" style=" padding:20px; border-radius:5px;">
            <?php foreach ($details->result() as $row) { ?>
            <form action="<?php echo base_url() . $row->location; ?>/submit_review/<?php echo str_replace(" ", "-", $row->business_name); ?>" method='post'>
            <?php } ?>
            <div class='form-group'>
            <label for="name" class='titleof_review font-weight-semibold'>Your Name</label>
            <input type="text" placeholder="Your name" class='form-control font-size-review' name='r_name'>
            </div>
            <div class='form-group'>
            <label for="title" class='titleof_review font-weight-semibold'>Title of your review</label>
            <input type="text" placeholder="title of riview" class='form-control font-size-review' name='r_title' required>
            </div>
            <div class='form-group mt-2'>
            <label for="rating" class='titleof_review font-weight-semibold'>Your overall rating</label>
            <input type="number" placeholder="provide rating from 1 to 5" required class='form-control' value="5" style='border-radius:0px;' name='r_rating'>
            </div>
            <div class='form-group mt-2'>
            <label for="review" class='titleof_review font-weight-semibold'>Your review</label>
            <textarea required class='form-control' placeholder="Your review" style='height:90px;' name='r_content'></textarea>
            </div>
            <div class="form-group mt-4">
            <input type="submit" value='Post' name='submit' class='view-more-btn' style='flex-flow:column-reverse; width:100px; border-radius:5px; height:auto; letter-spacing:1px;'>
            </div>
            </form>
            </div>
            </div>
            
            <div class="container bg-white mt-5 p-2" style='border-radius:5px;'>
            <div class="row showinline">
            <?php foreach ($review->result() as $row) { ?>
            <div class="col-sm-5 p-4" style='border-radius:5px; margin-bottom:30px; margin-top: 15px;'>
            
            <div class="col-sm-12 text-center" style="position: relative; top:-53px">
            <img src="<?php echo base_url() . 'assets/images/shop-1.jpg'; ?>" class='img img-responsive' alt="" style='border-radius:100%; height:80px; width:80px;'>
            </div>
            <div style='position:relative; top:-40px;'>
            <div class="col-sm-12 mt-0" style="margin-left:-16px;">
            <div class='font-weight-semibold white-space-normal' style='font-size:22px; margin:0px;'><?php echo $row->name; ?>
            </div>
            </div>
            <div style='margin-top:10px;'><img src="<?php echo base_url() . 'assets/images/sl_icon.png'; ?>" class='card-rating__nb' style="margin-left: 0px;" alt=""> <span style='font-size:small; font-weight:500;'><?php echo $row->rating; ?></span> </div>
            <div class="actual_review  mt-3 txt-primary white-space-normal text-overview" style='text-align:justify; line-break:anywhere;'>
            <?php echo $row->review_text; ?>
            </div>
            <div>
            <div class="date">Date of post:</div>
            <span style='position: relative;top: 5px;left: 8px; font-size:small'><?php echo $row->created_at; ?></span>
            </div>
            </div>
            
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php } ?>
            </div>
            </div>
            </div>
            </div>
            </div> -->
         <!-- /////Covid///// -->
         <div class="container mgl" style='margin-top:16px;'>
            <div class="row p-3 travel">
               <div class="col-sm-8 bg-white p-4" style='border-radius:5px; box-shadow:0 0 16px rgb(0 0 0 / 4%); margin-left:73px; width:755px;'>
                  <div class="multi-line-header multi-line-header--centered" style="display:inline-block;">
                     <div class="" style='letter-spacing:1px; text-align:left; margin-left:10px; font-size:25px; font-weight:700'>
                        TRAVEL SAFE DURING COVID-19
                     </div>
                  </div>
                  <br>
                  <ul class='p-4' style="margin-left: 27px;">
                     <li class='actual_review p-2 txt-primary white-space-normal fontcovid'>All linens senitized in high temperature</li>
                     <li class='actual_review p-2  txt-primary white-space-normal fontcovid'>Face mask is required for guest in public area</li>
                     <li class='actual_review p-2 txt-primary white-space-normal fontcovid'>Face mask is required for staff in public area</li>
                     <li class='actual_review p-2  txt-primary white-space-normal fontcovid'>Hand senitizer is must for staff and guest also</li>
                     <li class='actual_review p-2 txt-primary white-space-normal fontcovid'>Paid stay-at-home policy for staff with symptoms</li>
                     <li class='actual_review p-2 txt-primary white-space-normal fontcovid'>Regularly sanitized high-traffic areas</li>
                     <li class='actual_review p-2 txt-primary white-space-normal fontcovid'>Staff required to regularly wash hands</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- ////////////////////////////////lightbox///////////////////////// -->


   <div class="row">
  <!-- <div class="column">
    <img src="<?php echo base_url().'assets/images/a.jpg'; ?>" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo base_url().'assets/images/a.jpg'; ?>" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo base_url().'assets/images/a.jpg'; ?>" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo base_url().'assets/images/a.jpg'; ?>" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div> -->

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

  <?php $c=1; $n = $image->num_rows(); if($n>0){ foreach($image->result() as $row){
     ?>
    <div class="mySlides">
      <div class="numbertext"> <?php echo $c.'/'.$n; $c++;?>  </div>
      <img src="<?php echo $row->image_url; ?>" style="width:1198px; height:627px;">
    </div>
<?php }} else{ ?>
   <div class="mySlides">
      <div class="numbertext"> <?php echo $c.'/'.$n+1; ?>  </div>
      <img src="<?php foreach($details->result() as $val){echo $val->main_image;} ?>" style="width:1198px; height:627px;">
    </div>
   <?php }?>
   
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
  </div>
</div>













   <!-- ///////////////////////// End of lightbox/////////////////////// -->


   <!-- ////frequently asked questions: -->
   <!-- <div class='container' style='margin-top:100px; padding-left:90px;'>
      <div class="row ">
      <div class="col-sm-8">
      <div class="multi-line-header multi-line-header--centered">
      <div class="multi-line-header__title">
      FREQUENTLY ASKED QUESTIONS
      </div>
      </div>
      </div>
      </div>
      <div class="row bg-white p-3" style='border-radius:5px; box-shadow:0 0 16px rgb(0 0 0 / 4%)'>
      <div class="col-sm-8 offset-md-4 ">
      <div class='setcont' style="cursor:pointer">
      <?php foreach ($faq->result() as $row) { ?>
      <div class='question' value="<?php echo $row->id; ?>" onclick='ques1(this)'><?php echo $row->question; ?> </div>
      <div class='answer' id="<?php echo $row->id; ?>"> <?php echo $row->answer; ?></div>
      <hr>
      <?php } ?>
      <div>
      </div>
      </div>
      </div>
      </div>
      </div> -->
   <div class="col-sm-8 offset-md-3 mt-5">
   </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////  -->
<section class="section__trending recom">
   <div class="container">
      <div class="multi-line-header multi-line-header--centered" style='margin-left:18px;'>
         <div class="multi-line-header__title">
            Recommended
            <!-- <span class="icon-flash icon-trending"></span> -->
         </div>
      </div>
      <div class="tour-card-list tour-card-list--v2 tour-carousel">
         <?php foreach ($recommanded->result() as $row) { ?>
         <div class="tour-card-v2" aria-hidden="true" role="tabpanel" id="slick-slide00">
            <div data-href="<?php echo base_url() . $row->location; ?>/detail/<?php echo str_replace(" ", "-", $row->business_name); ?>" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="2430">
               <div class="tour-card-v2__banner">
                  <picture class="lazy-picture tour-card-v2__image lazy-picture-loaded">
                     <source data-srcset="<?php echo $row->main_image; ?> " media="(min-width: 1024px)" srcset=" <?php echo $row->main_image; ?>">
                     <source data-srcset="<?php echo $row->main_image; ?> " media="(min-width: 768px)" srcset="<?php echo $row->main_image; ?> ">
                     <source data-srcset="<?php echo $row->main_image; ?> " media="(min-width: 576px)" srcset="<?php echo $row->main_image; ?> ">
                     <source data-srcset="<?php echo $row->main_image; ?> " media="(min-width: 320px)" srcset="<?php echo $row->main_image; ?> ">
                     <source data-srcset="<?php echo $row->main_image; ?> " media="(max-width: 320px)" srcset="<?php echo $row->main_image; ?> ">
                     <img alt="<?php echo $row->main_img_alt; ?>" class="tour-card-v2__image" data-srcset="<?php echo $row->main_image; ?> " data-src="<?php echo $row->main_image; ?>" src="" srcset="<?php echo $row->main_image; ?> ">
                  </picture>
                  <div class="tour-card-v2__legibility-gradient"></div>
                  <div class="tour-card-v2__banner-data-wrap">
                     <span class="tour-card-v2__tags">
                     <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                     Featured
                     </span>
                     </span>
                     <ul class="tour-card-v2__additional-info">
                        <span class="icon-pin-bold"></span>
                        <span class="tour-card-v2__location"><?php echo $row->location; ?></span>
                        <span class="tour-card-v2__location-duration-separator">|</span>
                        <span><?php echo $row->sub_location; ?></span>
                     </ul>
                  </div>
               </div>
               <div class="tour-card-v2__details-wrap">
                  <a href="detail?cardval=<?php echo $row->id; ?>" class="tour-card-v2__name " target="_blank" tabindex="-1"><?php echo $row->features; ?></a>
                  <div class="tour-card-v2__reviews-wrap">
                     <div class="icon-star-empty"></div>
                     <div class="tour-card-v2__average-rating"><?php echo $row->rating; ?></div>
                  </div>
                  <div class="tour-card-v2__price-and-cta-wrap">
                     <div class="tour-card-v2__pricing">
                        <span class="current-price"><span class="currency-type">₹</span><?php echo $row->price_range; ?></span>
                        <span class="old-price"><span class="currency-type">₹</span>2,949</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php } ?>
      </div>
   </div>
</section>
<div>
<footer id="footer" class="footer ">
<div class="container">
   <div class="pre-footer">
      <div class="row">
         <div class="col">
            <p class="footer-titles">ABOUT THESPALINE</p>
            <ul class="footer-list">
               <li><a href="" class="text-decoration-none" target="_blank">ABOUT US</a></li>
               <li><a href="" class="text-decoration-none" target="_blank">WE ARE HIRING</a></li>
               <li><a href="" class="text-decoration-none" target="_blank">THRILLOPHILIA REVIEWS</a></li>
               <li><a href="" class="text-decoration-none" target="_blank">TERMS &amp; CONDITIONS</a></li>
               <li><a href="" class="text-decoration-none" target="_blank">PRIVACY POLICIES</a></li>
               <li><a href="" class="text-decoration-none" target="_blank">COPYRIGHT POLICIES</a></li>
               <li><a href="" class="text-decoration-none" target="_blank">SUPPORT</a></li>
               <li><span class="onclick-link footer-link" data-href="">APPS</span></li>
            </ul>
         </div>
         <div class="col">
            <p class="footer-titles">FOR SUPPLIERS</p>
            <ul class="footer-list">
               <li><a class="footer-link text-decoration-none" target="_blank" href="">LIST YOUR ACTIVITIES</a></li>
            </ul>
            <p class="footer-titles">FOR BRANDS</p>
            <ul class="footer-list">
               <li><a class="footer-link text-decoration-none" target="_blank" href="">PARTNER WITH US</a></li>
               <li><a class="footer-link text-decoration-none" target="_blank" href="">DESTINATION MARKETING</a></li>
            </ul>
            <p class="footer-titles">FOR TRAVEL AGENTS</p>
            <ul class="footer-list">
               <li><span class="onclick-link footer-link" data-href="">SIGN UP AS A AGENT</span></li>
               <li><span class="onclick-link footer-link" data-href="">AGENT LOGIN</span></li>
            </ul>
         </div>
         <div class="col">
            <p class="footer-titles">FOR TRAVELLERS</p>
            <ul class="footer-list">
               <li><span class="onclick-link footer-link" data-href="">GOPRO PASSPORT PROGRAM</span></li>
               <li><span class="onclick-link footer-link gift-link" data-href="">Gift an Experience</span></li>
            </ul>
         </div>
         <div class="col destination">
            <p class="footer-titles">TRAVEL DESTINATIONS</p>
            <div class="nearby-places-list">
               <div class="col">
                  <div class="nearby-places-item">
                     <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Bali" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/bali-4ef4a1f6f5bdf828f8f3780de7d59d8927a85b1036d9f3513dc135e4d4812ac4.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/bali-4ef4a1f6f5bdf828f8f3780de7d59d8927a85b1036d9f3513dc135e4d4812ac4.png" srcset="">
                     <span class="onclick-link footer-link" data-href="/cities/bali">
                     <span class="caption">BALI</span>
                     </span>
                  </div>
               </div>
               <div class="col">
                  <div class="nearby-places-item">
                     <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Dubai" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/dubai-f44e9fe3e35837870659f9eea44c3e5115c2f372a18c6d61bfffced671c9107a.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/dubai-f44e9fe3e35837870659f9eea44c3e5115c2f372a18c6d61bfffced671c9107a.png" srcset="">
                     <span class="onclick-link footer-link" data-href="/cities/dubai">
                     <span class="caption">DUBAI</span>
                     </span>
                  </div>
               </div>
               <div class="col">
                  <div class="nearby-places-item">
                     <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Singapore" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/singapore-84cf28a90e6abf6dc50c6094f2ee26c3ea66e02dbc86c7537d9d6fa8f23144be.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/singapore-84cf28a90e6abf6dc50c6094f2ee26c3ea66e02dbc86c7537d9d6fa8f23144be.png" srcset="">
                     <span class="onclick-link footer-link" data-href="/countries/singapore">
                     <span class="caption">SINGAPORE</span>
                     </span>
                  </div>
               </div>
               <div class="col">
                  <div class="nearby-places-item">
                     <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Thailand" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/thailand-7c637ba996a37d1b39eeab188e99da39500f620a5ae17d18a468cce72540b194.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/thailand-7c637ba996a37d1b39eeab188e99da39500f620a5ae17d18a468cce72540b194.png" srcset="">
                     <span class="onclick-link footer-link" data-href="/countries/thailand">
                     <span class="caption">THAILAND</span>
                     </span>
                  </div>
               </div>
               <div class="col">
                  <div class="nearby-places-item">
                     <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="New Zealand" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/andaman-056508e12d2428e8b3efb7de2565cf254584ea97daa8fe9b75719571b2fd6dff.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/andaman-056508e12d2428e8b3efb7de2565cf254584ea97daa8fe9b75719571b2fd6dff.png" srcset="">
                     <span class="onclick-link footer-link" data-href="/states/andaman-and-nicobar-islands">
                     <span class="caption">ANDAMAN</span>
                     </span>
                  </div>
               </div>
               <div class="col">
                  <div class="nearby-places-item">
                     <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="India" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/india-08df8c7f2902e2293487bf7c922aceb0db3ba59b462eae1309d7fbe3de720ec5.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/india-08df8c7f2902e2293487bf7c922aceb0db3ba59b462eae1309d7fbe3de720ec5.png" srcset="">
                     <span class="onclick-link footer-link" data-href="/countries/india">
                     <span class="caption">INDIA</span>
                     </span>
                  </div>
               </div>
               <div class="col">
                  <div class="nearby-places-item">
                     <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Ladakh" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/ladakh-66ea2f16d4f34af639c26118dfbabfcb8cdc37ea298f8505bd702d76fc5e3f76.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/ladakh-66ea2f16d4f34af639c26118dfbabfcb8cdc37ea298f8505bd702d76fc5e3f76.png" srcset="">
                     <span class="onclick-link footer-link" data-href="/cities/ladakh">
                     <span class="caption">LADAKH</span>
                     </span>
                  </div>
               </div>
               <div class="col">
                  <div class="nearby-places-item">
                     <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Hong Kong" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/hongkong-706a1492cba46d77363ed21678108ca17f87ec6f92cbbbb97ab561e4c3501b9f.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/hongkong-706a1492cba46d77363ed21678108ca17f87ec6f92cbbbb97ab561e4c3501b9f.png" srcset="">
                     <span class="onclick-link footer-link" data-href="/countries/hong-kong">
                     <span class="caption">HONGKONG</span>
                     </span>
                  </div>
               </div>
               <div class="col">
                  <div class="nearby-places-item">
                     <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Singapore" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/srilanka-5c2d88de3877628c6b384f6c2ba6d51d018bd1460b7e4666825ddb7f6e1bc25f.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/srilanka-5c2d88de3877628c6b384f6c2ba6d51d018bd1460b7e4666825ddb7f6e1bc25f.png" srcset="">
                     <span class="onclick-link footer-link" data-href="/countries/srilanka">
                     <span class="caption">SRI LANKA</span>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer-content">
      <div class="footer-logo">
         <a href="" class="logo-link">
            <img src='<?php echo base_url() . 'assets/images/logowhite.png'; ?>' class="desktop-logo mobile-hidden ">
            <img src='<?php echo base_url() . 'assets/images/logowhite.png';  ?>' class="desktop-hidden mobile-header-logo ">
            <!-- <div class="thrillo-logo white-logo desktop-logo"></div> -->
         </a>
      </div>
      <ul class="social-list">
         <li>
            <span class="onclick-link footer-link" data-href="https://www.facebook.com/Adventure.India.Thrillophilia">
            <span class="icon-facebook-circle"></span>
            </span>
         </li>
         <li>
            <span class="onclick-link footer-link" data-href="https://www.instagram.com/thrillophilia/">
            <span class="icon-instagram-circle"></span>
            </span>
         </li>
         <li>
            <span class="onclick-link footer-link" data-href="https://twitter.com/thrillophilia">
            <span class="icon-twitter-circle"></span>
            </span>
         </li>
         <li>
            <span class="onclick-link footer-link" data-href="https://in.linkedin.com/company/thrillophilia-adventure-tours-pvt.-ltd.">
            <span class="icon-linkedin-circle"></span>
            </span>
         </li>
         <li>
            <span class="onclick-link footer-link" data-href="https://www.youtube.com/channel/UC8MbRQQdYhNwOFeXmpK5UBw">
            <span class="icon-youtube-circle"></span>
            </span>
         </li>
      </ul>
   </div>
</div>
<style>
   @media (min-width:1023px) {
   .main-cont {
   padding-left: 150px;
   }
   .price_n_dis {
   box-shadow: 0 0 16px rgb(0 0 0 / 4%);
   padding: 5px 22px;
   width: 270px;
   height: 94px;
   margin-top: 78px;
   }
   .get_in_touch {
   position: relative;
   box-shadow: 0 0 16px rgb(0 0 0 / 4%);
   top: -154px;
   left: 750px;
   width: 270px;
   z-index: 9;
   }
   .fixpad {
   padding-left: 90px;
   }
   .fix-p {
   padding-left: 90px;
   }
   .f-ur {
   position: relative;
   top: -54px;
   }
   .lc {
   margin-top: -33px;
   margin-left: -12px;
   }
   .travel {
   width: 765px;
   }
   .recom {
   margin-top: 100px;
   }
   .padi {
   margin-left: -22px;
   }
   .mgl {
   margin-left: -90px;
   }
   }
   @media (max-width:1025px) {
   .first-img,
   .forth-img,
   .th-img {
   display: none;
   }
   .main-cont {
   /* padding-left: 20px; */
   margin-top: -300px;
   }
   .price_n_dis {
   margin-top: 340px;
   width: 100%;
   margin-left: 13px;
   }
   .get_in_touch {
   position: relative;
   box-shadow: 0 0 16px rgb(0 0 0 / 4%);
   top: 0px;
   left: 0px;
   margin-top: 290px;
   z-index: 0;
   }
   .feature_data {
   margin-top: 270px;
   padding: 0px;
   }
   .container {
   padding: 0px;
   }
   .fixpad {
   padding: 14px;
   }
   .f-detail {
   margin-bottom: 0px;
   }
   .f-detail .row {
   margin-top: -326px;
   }
   .f-ur {
   position: relative;
   top: 190px;
   }
   .lc {
   margin-top: 210px;
   margin-left: 0;
   }
   .mgl {
   margin-left: 0px;
   }
   .travel {
   width: 110%;
   margin-left: -90px;
   }
   }


   
</style>

<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
  width: 1198px;
  height:628px;
 
}

/* The Close Button */
.close {
  color: white;
 position: relative;
 top:-20px;
 left:-114px;
 float:right;
 
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  text-decoration: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>

<script>
function openModal() {
   $('.get_in_touch').css('z-index','0');
   $('.first-img .sec-img .th-img .forth-img').css('display','block');

  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
//   var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>




   




