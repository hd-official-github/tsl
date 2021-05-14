<html>

<head>
   <?php if (isset($details)) {
      foreach ($details->result() as $row) {  ?>
         <meta name="description" content="<?php echo $row->meta_desc; ?>">
         <title><?php echo $row->meta_title; ?></title>
      <?php }
   } else { ?>
      <title>Bangluru</title>
   <?php } ?>
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta name="HandheldFriendly" content="true">
   <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
   <link rel='stylesheet' href='<?php echo base_url() ?>assets/css/main2.css'>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url().'assets/css/simple-lightbox.min.css';?>">   
<script src="<?php echo base_url().'assets/js/simple-lightbox.jquery.min.js';?>"></script>

   <script src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
   <script src='<?php echo base_url() ?>assets/js/main.js'></script>
</head>

<body>
   <div class="page-container">
      <div id="wrapper" class="wrapper">
         <header id="header" class="transparent-nav " data-scroll-white-nav="true" data-scroll-half-nav="true">
            <div class="header-base">
               <div class="top-panel" style='<?php if (isset($bgcolor)) echo $bgcolor; ?>'>
                  <div class="container">
                     <div class="inner-wrap">
                        <div href="#" id="header-mobile-nav-opener" class="changeback" style='background:none;'><span></span></div>
                        <strong class="logo">
                           <a href="<?php echo base_url(); ?>">
                              <img src='<?php echo base_url() . 'assets/images/logowhite.png'; ?>' class="desktop-logo mobile-hidden logowhite ">
                              <img src='<?php echo base_url() . 'assets/images/logo.png'; ?>' class="desktop-logo mobile-hidden logoblack" style='display:none;'>
                              <img src='<?php echo base_url() . 'assets/images/logowhite.png';  ?>' class="colored-logo desktop-hidden abc mobile-header-logo mobwhitelogo">
                              <img src='<?php echo base_url() . 'assets/images/logo.png';  ?>' class="desktop-hidden colored-logo mobile-header-logo  abc mobblacklogo" style='display:none;'>
                           </a>
                        </strong>
                        <div class="search-container">
                           <div href="#" id="header-search-opener" class="desktop-hidden navbar-menu-toggler" data-submenu="adventureExcursionsMobileWrapper" data-menu-loaded="false" data-menu-identifier="adventure_excursions" data-version="mobile">
                              <span class=""> <i class="fas fa-search"></i></span>
                           </div>
                           <div class="search-slide">
                              <div class="inner-form-container">
                                 <form action="/listings/search" method="get" id="global-search-form">
                                    <fieldset>
                                       <div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;">
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="mobile-nav-drop" class="">
                        <ul class="mobile-tool-list">
                        
                           <li class="desktop-hidden"><a href="<?php echo base_url();?>" class="main-header-link">Home</a>
                           </li>
                           <li class="divider desktop-hidden"></li>
                           <li><a href="" class="gift-link main-header-link business_btn mob_btn">
                                Add your business
                              </a>
                           </li>
                           <li class="divider desktop-hidden"></li>
                           <li><a href="" class="gift-link main-header-link business_btn mob_btn">
                               Login
                              </a>
                           </li>
                           <li class="divider desktop-hidden"></li>
                           <li class="desktop-hidden"><a href="" class="main-header-link">Help</a></li>
                           <!-- <li class="desktop-hidden"><a href="#">FAQs</a></li> -->
                        </ul>
                     </div>

                  </div>
               </div>
            </div>
         </header>
         <input hidden id='fun' value='<?php if (isset($bgcolor)) echo $bgcolor; ?>'>
         <script>
            if ($('#fun').val() != "") {
               $('img').attr('src', "<?php echo base_url() . 'assets/images/logo.png'; ?>");
               $('.business_btn').css('color', 'black');
               $('.top-panel .container').css('border-bottom', 'none');
               $('.changeback').attr('data-attr','#000');

            }
            if($('#mobile-nav-drop').hasClass('slideIn')){
               alert("hii");
            }
          

         </script>