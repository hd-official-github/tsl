<?php include(APPPATH . '/inc/head.php') ?>
<title>Bangluru list</title>
</head>

<body style="background-color: #f1f1f1;">


<div class="page-container">
    <header id="header" class='mobpanel' data-scroll-white-nav="true" data-scroll-half-nav="true">
        <div class="header-base">
            <div class="top-panel mobpanel">
                <div class="container">
                    <div class="inner-wrap">
                        <div href="#" id="header-mobile-nav-opener" class=""><span></span></div>
                        <strong class="logo">
                            <a href="">
                                <img src='<?php echo base_url() . 'assets/images/logowhite.png'; ?>' class="desktop-logo mobile-hidden" style="display:none">

                                <img src='<?php echo base_url() . 'assets/images/logo.png'; ?>' class="desktop-logo mobile-hidden ">

                                <img src='<?php echo base_url() . 'assets/images/logowhite.png';  ?>' class="colored-logo desktop-hidden abc mobile-header-logo showlogo">

                                <img src='<?php echo base_url() . 'assets/images/logo.png';  ?>' class="desktop-hidden colored-logo mobile-header-logo mymoblogo abc">

                            </a>
                        </strong>
                        <div class="search-container">
                            <div href="#" id="header-search-opener" class="desktop-hidden navbar-menu-toggler" data-submenu="adventureExcursionsMobileWrapper" data-menu-loaded="false" data-menu-identifier="adventure_excursions" data-version="mobile">
                                <span class="icon-search"></span>
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
                            <li class="desktop-hidden"><a href="/" class="main-header-link">Home</a></li>
                            <li class="divider desktop-hidden"></li>
                            <li><a href="/go-to-gift-page" class="gift-link main-header-link">


                                    <span class="text" style='background:#f07c7c; padding:9px; border-radius:10px;  color:white; box-shadow:0px 0px 8px black; display:flex; padding-right:15px;'><i class="far fa-plus-square fa-2x" style="padding-right:10px; text-align:center;"> </i> New Bussiness</span>
                                </a>
                            </li>
                            <li class="divider desktop-hidden"></li>
                            <li id="header-login-wrap">
                                <span data-href="/consumers/sign_in" class="main-header-link trigger-login-popup onclick-link">Log In</span>
                            </li>
                            <li class="divider desktop-hidden"></li>
                            <li class="desktop-hidden"><a href="https://thrillophilia.freshdesk.com/support/home" class="main-header-link">Help</a></li>
                            <!-- <li class="desktop-hidden"><a href="#">FAQs</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>







    <div class="wrapper-content wrapper-content--ud" infinite-scroll="">
        <div class="wrapper">


            <div class='container breadcrab'>
                <div class="breadcrumbs-nav">
                    <nav class="fl-row">
                        <a class="text-uppercase text-decoration-none" href="/">Nearbuy</a>

                        <a class="text-uppercase text-decoration-none" href="/delhi-ncr/c/all-offers">Deals in New Delhi</a>

                        <a class="text-uppercase cursor-default text-decoration-none" href="/delhi-ncr/collection/full-body-massage-offers/">Body Massage</a>
                    </nav>
                </div>
                <hr class="divider divider--thick">

            </div>

            <!-- <div class="row">
                                    <div class="col-xs-12 col-s-4 col-l-3">
                                        <div class="city-name">
                                            <p class="txt-primary font-weight-semibold font-lg">Promos &amp; Filters</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-s-8 col-l-9">
                                        <div class="row">
                                            <div class="col-s-6">
                                            
                                                <h1 class="txt-primary font-weight-semibold font-lg line-height-default">Full Body Massage Offers in New Delhi</h1>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>  -->
            <!-- <div class="container lshead">
                <div class="row">

                    <div class="col-sm-4 listheading">Promos and filters
                    </div>

                    <div class="col-sm-8 listheading">All photos</div>

                </div>
            </div> -->
            <div class="bg-white p-3 chead secondhead" style='margin-top:-20px; width:100%;'>
                <div class='row'>
                    <div class="col-sm-12">
                        <img src="<?php echo base_url() . 'assets/images/backward.png'; ?>" class='spainBang'>
                        <h3 style="position:relative; left:29px;">Best Spa in Banglore</h3>
                    </div>
                </div>
            </div>
            <!-- /////the bottom row  -->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-4">

                        <promo-slider>
                            <div class="position-relative  promo-slider-wrapper">

                                <div class="all-promo-wrapper">
                                    <div class="promo-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0.6s;">

                                        <div>
                                            <promo-card initindex="1">
                                                <div class="promo" ga-impression="">
                                                    <div class="block margin-reset clearfix overflow-hidden">
                                                        <div class="block__inner local-promo">

                                                            <div class="promo__price">
                                                                <p class="txt-primary font-weight-bold white-space-normal" style="font-size:25px;">Domaine de Berinzenn</p>
                                                            </div>


                                                            

                                                            <div class="promo__title">
                                                                <merchant-rating>
                                                                    <!---->
                                                                    <div class="margin-right-s card-rating__listing" style="margin-top: -8px; margin-left:-10px;">
                                                                        <div class="card-rating margin-bottom-zero nb--4-5">
                                                                            <!----><img alt="nb" class="card-rating__nb" height="10" src="<?php echo base_url() . 'assets/images/sl_icon.png'; ?>" data-lzled="true">
                                                                            <!---->
                                                                            <span class="card-rating__img"></span>
                                                                            <!----><span class="card-rating__value font-weight-bold line-height-default" style='font-size:small;'>4.3</span>
                                                                            <span><a class='text-decoration-none font-weight-bold' style='color: #010101; font-size:small; margin-left:5px;'>100 Reviews</a></span>
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </merchant-rating>
                                                            </div>
                                                            <p class="txt-primary font-weight-bold white-space-normal" style="font-size:14px; margin-top:10px;">Overviews</p>

                                                            <div class='txt-primary white-space-normal text-overview'> In the heart of the Spa forest and on the edge of the Fagne de Malchamps, the Domaine of Bérinzenne offers spaces freely to the public: panoramic tower, park with accessible </div>
                                                            <div>
                                                                <img src="<?php echo base_url() . 'assets/images/duration.png'; ?>" alt="" class='dur'>
                                                                <span class='txt-primary font-weight-bold white-space-normal inline'> Suggested Duration: </span> <span style='margin-left:120px;padding:7px;margin-top:8px; font-size:12px;display:inline-block; '> 2-3 hours</span>

                                                            </div>
                                                            <div>
                                                                <img src="<?php echo base_url() . 'assets/images/location.png'; ?>" alt="" class='dur'>
                                                                <span class='txt-primary font-weight-bold white-space-normal inline'> Address: </span> <span style='margin-left:50px;padding:7px;margin-top:8px; font-size:12px;display:inline-block; '> Electronic city Bangluru,Karnatka</span>

                                                            </div>
                                                        </div>

                                                        <!---->



                                                    </div>
                                                </div>
                                            </promo-card>
                                        </div>


                                    </div>
                                </div>

                                <!---->

                            </div>

                        </promo-slider>


                    </div>
                    <div class="col-sm-8 col-m-8 col-l-9 listing-grid">
                        <!-- Carousel by me  -->
                        <div class="container">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height:350px; border-radius:5px 5px 5px 5px;">
                                    <div class="carousel-item">
                                        <img src="http://localhost/tsl/assets/images/building-one.jpg" class="d-block w-100 " style="height:300px" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="http://localhost/tsl/assets/images/building.jpg" class="d-block w-100" style="height:300px" alt="...">
                                    </div>
                                    <div class="carousel-item active">
                                        <img src="http://localhost/tsl/assets/images/one.png" class="d-block w-100" style="height:300px" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" style="margin-top:-20px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>

                                </button>
                                <span style="position:relative; top:-90px; color:white; letter-spacing:1px; left:5px;">All Photos(3)</span>
                                <button class="carousel-control-next" type="button" style="margin-top:-20px;" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>

                            </div>
                        </div>



                        <!---->
                        <!-- <div class="text-center">
                            <button class="view-more-btn newbtn" tabindex="0">VIEW ALL OFFERS</button>
                        </div> -->
                    </div>
                </div>

            </div>



            <!-- /////the next row/// -->

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                          <div class="container bg-white p-3" style='border-radius:5px;'>
                              <div class="row">
                                  <div class="col-sm-12 fheading" >Features</div>
                              </div>
                              <div class="row" style='padding:10px;'>
                                  <div class="col-sm-6 mt-3">
                                        <img src="<?php echo base_url().'assets/images/features.png';?>" alt="" class='feature'>  <h3 class='fstate'>featuers 1</h3><br>
                                        <img src="<?php echo base_url().'assets/images/features.png';?>" alt="" class='feature'>  <h3 class='fstate'>featuers 2</h3><br>
                                        <img src="<?php echo base_url().'assets/images/features.png';?>" alt="" class='feature'>  <h3 class='fstate'>featuers 3</h3><br>
                                        <img src="<?php echo base_url().'assets/images/features.png';?>" alt="" class='feature'>  <h3 class='fstate'>featuers 4</h3><br>
                                        <img src="<?php echo base_url().'assets/images/features.png';?>" alt="" class='feature'>  <h3 class='fstate'>featuers 5</h3>
                                            
                                  </div>
                                  <div class="col-sm-6">
                                  
                                  <img src="<?php echo base_url().'assets/images/features.png';?>" alt="" class='feature'>  <h3 class='fstate'>featuers 1</h3><br>
                                        <img src="<?php echo base_url().'assets/images/features.png';?>" alt="" class='feature'>  <h3 class='fstate'>featuers 2</h3><br>
                                        <img src="<?php echo base_url().'assets/images/features.png';?>" alt="" class='feature'>  <h3 class='fstate'>featuers 3</h3><br>
                                        <img src="<?php echo base_url().'assets/images/features.png';?>" alt="" class='feature'>  <h3 class='fstate'>featuers 4</h3><br>
                                        <img src="<?php echo base_url().'assets/images/features.png';?>" alt="" class='feature'>  <h3 class='fstate'>featuers 5</h3>
                                  </div>
                              </div>
                          </div>
                        

                    </div>
                    </div>
                    
                </div>

            </div>



            <!-- ///////recommanded//// -->

        




        </div>

       

        <!-- ////frequently asked questions: -->

        <div class='container mt-4'>
            <div class="row">
                <div class="col-sm-12">
                <div class="multi-line-header multi-line-header--centered">
                        <div class="multi-line-header__title">
                            FREQUENTLY ASKED QUESTIONS
                            <!-- <span class="icon-flash icon-trending"></span> -->
                        </div>
                    </div>

                </div>
            </div>
            <div class="row bg-white" style='border-radius:5px; padding:10px;'>
                <div class="col-sm-12 offset-md-4 ">
                <div class='setcont'>
                        <div class='question' onclick='ques1()'>What is the website??</div>
                        <div class='answer1 answer'> website is the collection of webpages which provide information about a particular things Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque exercitationem molestias nemo aspernatur accusantium distinctio assumenda expedita tempore quo iusto, facilis, asperiores rerum doloremque consequatur excepturi autem dolor voluptatibus omnis?</div>
                        <hr>
                        <div>
                            <div class='question' onclick='ques2()'>What is the software in computer science?</div>
                            <div class='answer2 answer'> website is the collection of webpages which provide information about a particular Atque exercitationem molestias nemo aspernatur accusantium distinctio assumendathings Lorem ipsum dolor sit.

                            </div>
                            <hr>
                        </div>
                        <div>
                            <div class='question' onclick='ques3()'>Do you know about hardware ??</div>
                            <div class='answer3 answer'> website is the collection of webpages which provide information about a particularAtque exercitationem molestias nemo aspernatur accusantium distinctio assumenda things</div>
                            <hr>
                        </div>
                    </div>
                
                    </div></div>
            </div>
                <div class="col-sm-8 offset-md-3 mt-5">
                    

                </div>
            
        </div>



<!-- ////////////////////////////////////////////////////////////////////////////  -->
<section class="section__trending">
                <div class="container">
                    <div class="multi-line-header multi-line-header--centered">
                        <div class="multi-line-header__title">
                            Luxury Resort Deals
                            <!-- <span class="icon-flash icon-trending"></span> -->
                        </div>
                        <div class="multi-line-header__caption">Upto 70% Off</div>
                    </div>
                    <div class="tour-card-list tour-card-list--v2 tour-carousel slick-initialized slick-slider slick-dotted"><a href="#" class="slick-prev slick-arrow" style=""><span class="icon-left-arrow"></span></a>
















                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 40000px; transform: translate3d(-1013px, 0px, 0px);"><div class="tour-card-v2 slick-slide slick-cloned" style="" aria-hidden="true" tabindex="-1" role="tabpanel" data-slick-index="-4">
                            <div data-href="/tours/the-roseate-ganges-rishikesh-flat-25-off" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="18430">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(max-width: 320px)"><img alt="Pkhk5khmu5wfl1phdog12w2nwjnk 11 %281%29 %281%29" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg" src="">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Rishikesh</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/the-roseate-ganges-rishikesh-flat-25-off" class="tour-card-v2__name" target="_blank" tabindex="-1">The Roseate Ganges, Rishikesh | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">5.0</div>
                                        <div class="tour-card-v2__reviews-count">(46 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>24,400</span>
                                            <span class="old-price"><span class="currency-type">₹</span>32,000</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-cloned" style="" aria-hidden="true" tabindex="-1" role="tabpanel" data-slick-index="-3">
                            <div data-href="/tours/honeymoon-inn" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="19942">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(max-width: 320px)"><img alt="Qtidnugyscxt7bovcobtpfl5izae 1597228733 57459365" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png" src="">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Manali</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/honeymoon-inn" class="tour-card-v2__name" target="_blank" tabindex="-1">Honeymoon Inn, Manali | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">5.0</div>
                                        <div class="tour-card-v2__reviews-count">(57 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>3,500</span>
                                            <span class="old-price"><span class="currency-type">₹</span>4,300</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-cloned" style="" aria-hidden="true" tabindex="-1" role="tabpanel" data-slick-index="-2">
                            <div data-href="/tours/corbett-jungle-treasure-resort-flat-50-off" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="12098">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(max-width: 320px)"><img alt="T50akowbh32sovty6ayzm1bk0i3s 1600519940 140292047" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png" src="">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Ramnagar</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/corbett-jungle-treasure-resort-flat-50-off" class="tour-card-v2__name" target="_blank" tabindex="-1">Corbett Jungle Treasure Resort | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(37 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>2,700</span>
                                            <span class="old-price"><span class="currency-type">₹</span>3,800</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-cloned" style="" aria-hidden="true" tabindex="-1" role="tabpanel" data-slick-index="-1">
                            <div data-href="/tours/namami-ganges-resort-rishikesh-with-river-rafting-flat-44-off" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="1156">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(max-width: 320px)"><img alt="E5pdom5n3ii47k7wigycn6bvfjg6 1591889898 namami ganges resort" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg" src="">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Rishikesh</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/namami-ganges-resort-rishikesh-with-river-rafting-flat-44-off" class="tour-card-v2__name" target="_blank" tabindex="-1">Namami Ganges Resort, Rishikesh | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(39 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>6,000</span>
                                            <span class="old-price"><span class="currency-type">₹</span>8,999</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-current slick-active" style="" aria-hidden="false" role="tabpanel" id="slick-slide10" data-slick-index="0">
                            <div data-href="/tours/aloha-resort-stay-with-spa-experience-flat-40-off" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="10192">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image lazy-picture-loaded">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x" media="(min-width: 1024px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x" media="(min-width: 768px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x" media="(min-width: 576px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x" media="(min-width: 320px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x" media="(max-width: 320px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x"><img alt="Nn4p0a4jw7b3ec7gdb35a4bfn7cu 1589461759 39784e54f69411e78a300a4cef95d023" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png" src="" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x">
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
                                            <span class="tour-card-v2__location">Rishikesh</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/aloha-resort-stay-with-spa-experience-flat-40-off" class="tour-card-v2__name" target="_blank" tabindex="0">Aloha On The Ganges, Rishikesh | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(31 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>7,139</span>
                                            <span class="old-price"><span class="currency-type">₹</span>8,600</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-active" style="" aria-hidden="false" role="tabpanel" id="slick-slide11" data-slick-index="1">
                            <div data-href="/tours/the-honeymoon-resort-apple-country-in-manali" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="12842">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image lazy-picture-loaded">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x" media="(min-width: 1024px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x" media="(min-width: 768px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x" media="(min-width: 576px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x" media="(min-width: 320px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x" media="(max-width: 320px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x"><img alt="Fatrf6pjr45qqrel7eio3ttvw7a1 6i7l" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg" src="" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Manali</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/the-honeymoon-resort-apple-country-in-manali" class="tour-card-v2__name" target="_blank" tabindex="0">Apple Country Resort, Manali | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(40 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>6,199</span>
                                            <span class="old-price"><span class="currency-type">₹</span>8,299</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-active" style="" aria-hidden="false" role="tabpanel" id="slick-slide12" data-slick-index="2">
                            <div data-href="/tours/the-tattva-resort" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="3196">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image lazy-picture-loaded">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x" media="(min-width: 1024px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x" media="(min-width: 768px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x" media="(min-width: 576px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x" media="(min-width: 320px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x" media="(max-width: 320px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x"><img alt="Hocuira36fuq4jumrdu32hhccsyt tattva1" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png" src="" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Joshimath</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/the-tattva-resort" class="tour-card-v2__name" target="_blank" tabindex="0">The Tattva Resort, Auli | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(27 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>4,300</span>
                                            <span class="old-price"><span class="currency-type">₹</span>6,300</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-active" style="" aria-hidden="false" role="tabpanel" id="slick-slide13" data-slick-index="3">
                            <div data-href="/tours/luxury-stay-at-ibnii-resort-coorg" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="18837">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 2x" media="(max-width: 320px)"><img alt="Kr7z436lbkmek0an05kw0bizvuwf 1599480175 ibni" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg" src="">
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
                                            <span class="tour-card-v2__location">Coorg</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/luxury-stay-at-ibnii-resort-coorg" class="tour-card-v2__name" target="_blank" tabindex="0">The Ibnii, Coorg | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(31 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>13,999</span>
                                            <span class="old-price"><span class="currency-type">₹</span>24,160</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide14" data-slick-index="4">
                            <div data-href="/tours/the-roseate-ganges-rishikesh-flat-25-off" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="18430">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(max-width: 320px)"><img alt="Pkhk5khmu5wfl1phdog12w2nwjnk 11 %281%29 %281%29" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg" src="">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Rishikesh</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/the-roseate-ganges-rishikesh-flat-25-off" class="tour-card-v2__name" target="_blank" tabindex="-1">The Roseate Ganges, Rishikesh | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">5.0</div>
                                        <div class="tour-card-v2__reviews-count">(46 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>24,400</span>
                                            <span class="old-price"><span class="currency-type">₹</span>32,000</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide15" data-slick-index="5">
                            <div data-href="/tours/honeymoon-inn" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="19942">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(max-width: 320px)"><img alt="Qtidnugyscxt7bovcobtpfl5izae 1597228733 57459365" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png" src="">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Manali</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/honeymoon-inn" class="tour-card-v2__name" target="_blank" tabindex="-1">Honeymoon Inn, Manali | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">5.0</div>
                                        <div class="tour-card-v2__reviews-count">(57 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>3,500</span>
                                            <span class="old-price"><span class="currency-type">₹</span>4,300</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide16" data-slick-index="6">
                            <div data-href="/tours/corbett-jungle-treasure-resort-flat-50-off" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="12098">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(max-width: 320px)"><img alt="T50akowbh32sovty6ayzm1bk0i3s 1600519940 140292047" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png" src="">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Ramnagar</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/corbett-jungle-treasure-resort-flat-50-off" class="tour-card-v2__name" target="_blank" tabindex="-1">Corbett Jungle Treasure Resort | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(37 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>2,700</span>
                                            <span class="old-price"><span class="currency-type">₹</span>3,800</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide17" data-slick-index="7">
                            <div data-href="/tours/namami-ganges-resort-rishikesh-with-river-rafting-flat-44-off" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="1156">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(max-width: 320px)"><img alt="E5pdom5n3ii47k7wigycn6bvfjg6 1591889898 namami ganges resort" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg" src="">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Rishikesh</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/namami-ganges-resort-rishikesh-with-river-rafting-flat-44-off" class="tour-card-v2__name" target="_blank" tabindex="-1">Namami Ganges Resort, Rishikesh | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(39 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>6,000</span>
                                            <span class="old-price"><span class="currency-type">₹</span>8,999</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-cloned" style="" aria-hidden="true" role="tabpanel" data-slick-index="8" tabindex="-1">
                            <div data-href="/tours/aloha-resort-stay-with-spa-experience-flat-40-off" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="10192">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image lazy-picture-loaded">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x" media="(min-width: 1024px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x" media="(min-width: 768px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x" media="(min-width: 576px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x" media="(min-width: 320px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x" media="(max-width: 320px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x"><img alt="Nn4p0a4jw7b3ec7gdb35a4bfn7cu 1589461759 39784e54f69411e78a300a4cef95d023" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png" src="" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/nn4p0a4jw7b3ec7gdb35a4bfn7cu_1589461759_39784e54f69411e78a300a4cef95d023.png 2x">
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
                                            <span class="tour-card-v2__location">Rishikesh</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/aloha-resort-stay-with-spa-experience-flat-40-off" class="tour-card-v2__name" target="_blank" tabindex="-1">Aloha On The Ganges, Rishikesh | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(31 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>7,139</span>
                                            <span class="old-price"><span class="currency-type">₹</span>8,600</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-cloned" style="" aria-hidden="true" role="tabpanel" data-slick-index="9" tabindex="-1">
                            <div data-href="/tours/the-honeymoon-resort-apple-country-in-manali" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="12842">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image lazy-picture-loaded">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x" media="(min-width: 1024px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x" media="(min-width: 768px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x" media="(min-width: 576px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x" media="(min-width: 320px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x" media="(max-width: 320px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x"><img alt="Fatrf6pjr45qqrel7eio3ttvw7a1 6i7l" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg" src="" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/fatrf6pjr45qqrel7eio3ttvw7a1_6i7l.jpg 2x">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Manali</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/the-honeymoon-resort-apple-country-in-manali" class="tour-card-v2__name" target="_blank" tabindex="-1">Apple Country Resort, Manali | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(40 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>6,199</span>
                                            <span class="old-price"><span class="currency-type">₹</span>8,299</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-cloned" style="" aria-hidden="true" role="tabpanel" data-slick-index="10" tabindex="-1">
                            <div data-href="/tours/the-tattva-resort" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="3196">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image lazy-picture-loaded">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x" media="(min-width: 1024px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x" media="(min-width: 768px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x" media="(min-width: 576px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x" media="(min-width: 320px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x" media="(max-width: 320px)" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x"><img alt="Hocuira36fuq4jumrdu32hhccsyt tattva1" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png" src="" srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/hocuira36fuq4jumrdu32hhccsyt_tattva1.png 2x">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Joshimath</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/the-tattva-resort" class="tour-card-v2__name" target="_blank" tabindex="-1">The Tattva Resort, Auli | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(27 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>4,300</span>
                                            <span class="old-price"><span class="currency-type">₹</span>6,300</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-cloned" style="" aria-hidden="true" role="tabpanel" data-slick-index="11" tabindex="-1">
                            <div data-href="/tours/luxury-stay-at-ibnii-resort-coorg" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="18837">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 2x" media="(max-width: 320px)"><img alt="Kr7z436lbkmek0an05kw0bizvuwf 1599480175 ibni" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/kr7z436lbkmek0an05kw0bizvuwf_1599480175_ibni.jpg" src="">
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
                                            <span class="tour-card-v2__location">Coorg</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/luxury-stay-at-ibnii-resort-coorg" class="tour-card-v2__name" target="_blank" tabindex="-1">The Ibnii, Coorg | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(31 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>13,999</span>
                                            <span class="old-price"><span class="currency-type">₹</span>24,160</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-cloned" style="" aria-hidden="true" tabindex="-1" role="tabpanel" data-slick-index="12">
                            <div data-href="/tours/the-roseate-ganges-rishikesh-flat-25-off" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="18430">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" media="(max-width: 320px)"><img alt="Pkhk5khmu5wfl1phdog12w2nwjnk 11 %281%29 %281%29" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/pkhk5khmu5wfl1phdog12w2nwjnk_11_%281%29_%281%29.jpg" src="">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Rishikesh</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/the-roseate-ganges-rishikesh-flat-25-off" class="tour-card-v2__name" target="_blank" tabindex="-1">The Roseate Ganges, Rishikesh | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">5.0</div>
                                        <div class="tour-card-v2__reviews-count">(46 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>24,400</span>
                                            <span class="old-price"><span class="currency-type">₹</span>32,000</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-cloned" style="" aria-hidden="true" tabindex="-1" role="tabpanel" data-slick-index="13">
                            <div data-href="/tours/honeymoon-inn" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="19942">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" media="(max-width: 320px)"><img alt="Qtidnugyscxt7bovcobtpfl5izae 1597228733 57459365" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/qtidnugyscxt7bovcobtpfl5izae_1597228733_57459365.png" src="">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Manali</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/honeymoon-inn" class="tour-card-v2__name" target="_blank" tabindex="-1">Honeymoon Inn, Manali | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">5.0</div>
                                        <div class="tour-card-v2__reviews-count">(57 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>3,500</span>
                                            <span class="old-price"><span class="currency-type">₹</span>4,300</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-cloned" style="" aria-hidden="true" tabindex="-1" role="tabpanel" data-slick-index="14">
                            <div data-href="/tours/corbett-jungle-treasure-resort-flat-50-off" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="12098">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" media="(max-width: 320px)"><img alt="T50akowbh32sovty6ayzm1bk0i3s 1600519940 140292047" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/t50akowbh32sovty6ayzm1bk0i3s_1600519940_140292047.png" src="">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Ramnagar</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/corbett-jungle-treasure-resort-flat-50-off" class="tour-card-v2__name" target="_blank" tabindex="-1">Corbett Jungle Treasure Resort | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(37 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>2,700</span>
                                            <span class="old-price"><span class="currency-type">₹</span>3,800</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="tour-card-v2 slick-slide slick-cloned" style="" aria-hidden="true" tabindex="-1" role="tabpanel" data-slick-index="15">
                            <div data-href="/tours/namami-ganges-resort-rishikesh-with-river-rafting-flat-44-off" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="1156">
                                <div class="tour-card-v2__banner">
                                    <picture class="lazy-picture tour-card-v2__image">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(min-width: 1024px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_409,q_auto,w_314/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(min-width: 768px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_229,q_auto,w_303/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(min-width: 576px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_333,q_auto,w_253/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(min-width: 320px)">
                                        <source data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_196,q_auto,w_143/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" media="(max-width: 320px)"><img alt="E5pdom5n3ii47k7wigycn6bvfjg6 1591889898 namami ganges resort" class="tour-card-v2__image" data-srcset="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.0,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 1x, https://res.cloudinary.com/thrillophilia/image/upload/c_fill,dpr_1.5,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg 2x" data-src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_301,q_auto,w_222/v1/filestore/e5pdom5n3ii47k7wigycn6bvfjg6_1591889898_namami-ganges-resort.jpg" src="">
                                    </picture>
                                    <div class="tour-card-v2__legibility-gradient"></div>
                                    <div class="tour-card-v2__banner-data-wrap">
                                        <span class="tour-card-v2__tags">
                                            <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                                SPECIAL OFFERS
                                            </span>
                                        </span>

                                        <ul class="tour-card-v2__additional-info">
                                            <span class="icon-pin-bold"></span>
                                            <span class="tour-card-v2__location">Rishikesh</span>
                                            <span class="tour-card-v2__location-duration-separator">|</span>
                                            <span>2D/1N</span>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tour-card-v2__details-wrap">
                                    <a href="/tours/namami-ganges-resort-rishikesh-with-river-rafting-flat-44-off" class="tour-card-v2__name" target="_blank" tabindex="-1">Namami Ganges Resort, Rishikesh | Luxury Staycation Deal</a>
                                    <div class="tour-card-v2__reviews-wrap">
                                        <div class="icon-star-empty"></div>
                                        <div class="tour-card-v2__average-rating">4.0</div>
                                        <div class="tour-card-v2__reviews-count">(39 Reviews)</div>
                                    </div>
                                    <div class="tour-card-v2__price-and-cta-wrap">
                                        <div class="tour-card-v2__pricing">
                                            <span class="current-price"><span class="currency-type">₹</span>6,000</span>
                                            <span class="old-price"><span class="currency-type">₹</span>8,999</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div></div></div>
                        
                        
                        
                        
                        
                        
                        
                    <a href="#" class="slick-next slick-arrow" style=""><span class="icon-right-arrow"></span></a><ul class="slick-dots" style="display: block;" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 2" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide14" aria-label="2 of 2" tabindex="-1">2</button></li></ul></div>
                </div>
            </section>



        <div>
            <footer id="footer" class="footer ">
                <div class="container">
                    <div class="pre-footer">
                        <div class="row">
                            <div class="col">
                                <p class="footer-titles">ABOUT THRILLOPHILIA</p>
                                <ul class="footer-list">
                                    <li><a href="/about-us" target="_blank">ABOUT US</a></li>
                                    <li><a href="/careers" target="_blank">WE ARE HIRING</a></li>
                                    <li><a href="/reviews" target="_blank">THRILLOPHILIA REVIEWS</a></li>
                                    <li><a href="/terms-and-conditions" target="_blank">TERMS &amp; CONDITIONS</a></li>
                                    <li><a href="/privacy-policy" target="_blank">PRIVACY POLICIES</a></li>
                                    <li><a href="/copyright-policies" target="_blank">COPYRIGHT POLICIES</a></li>
                                    <li><a href="https://thrillophilia.freshdesk.com/support/home" target="_blank">SUPPORT</a></li>
                                    <li><span class="onclick-link footer-link" data-href="/apps">APPS</span></li>
                                </ul>
                            </div>
                            <div class="col">
                                <p class="footer-titles">FOR SUPPLIERS</p>
                                <ul class="footer-list">
                                    <li><a class="footer-link" target="_blank" href="/suppliers">LIST YOUR ACTIVITIES</a></li>
                                </ul>
                                <p class="footer-titles">FOR BRANDS</p>
                                <ul class="footer-list">
                                    <li><a class="footer-link" target="_blank" href="/advertise-with-us">PARTNER WITH US</a></li>
                                    <li><a class="footer-link" target="_blank" href="/destination-marketing">DESTINATION MARKETING</a></li>
                                </ul>
                                <p class="footer-titles">FOR TRAVEL AGENTS</p>
                                <ul class="footer-list">
                                    <li><span class="onclick-link footer-link" data-href="/platform_leads/new?lead_type=agent_lead">SIGN UP AS A AGENT</span></li>
                                    <li><span class="onclick-link footer-link" data-href="/agents/sign_in">AGENT LOGIN</span></li>
                                </ul>
                            </div>
                            <div class="col">
                                <p class="footer-titles">FOR TRAVELLERS</p>
                                <ul class="footer-list">
                                    <li><span class="onclick-link footer-link" data-href="/gopro">GOPRO PASSPORT PROGRAM</span></li>
                                    <li><span class="onclick-link footer-link gift-link" data-href="/go-to-gift-page">Gift an Experience</span></li>
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

                <div class="reserved">
                    <div class="container">
                        <span class="caption">© 2021 <a href="/">Thrillophilia.com</a> All rights reserved.</span>
                        <p>The content and images used on this site are copyright protected and copyrights vests with the respective
                            owners. The usage of the content and images on this website is intended to promote the works and no
                            endorsement of the artist shall be implied. Unauthorized use is prohibited and punishable by law.</p>
                    </div>
                </div>
            </footer>
        </div>
            


        </div>
</div>

</body>