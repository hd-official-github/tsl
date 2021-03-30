<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($meta_title)) echo '<title>' . ucfirst($meta_title) . '</title>'; ?>
    <?php if (isset($meta_desc)) echo '<meta name="description" content="' . ucfirst($meta_desc) . '">'; ?>

    <!-- <meta name="description" content="<?php
                                            // if (isset($loc_data)) {
                                            //     foreach ($loc_data->result() as $row) echo $row->meta_desc;
                                            // } elseif (isset($blog_details)) {
                                            //     foreach ($blog_details->result() as $row) echo $row->meta_desc;
                                            // } 
                                            ?> <?php #if (isset($meta_title)) echo $meta_title; 
                                                ?>"> -->
    <!-- custom css  -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/styles/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/home.css">
    <!-- bootstrap cdn  -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="<?php echo base_url() ?>assets/images/fav.png" type="image/pmg" sizes="16x16">
    <!-- slick carousel cdn  -->
    <link rel="stylesheet" href="https://rawgit.com/kenwheeler/slick/master/slick/slick.css">
    <link rel="stylesheet" href="https://rawgit.com/kenwheeler/slick/master/slick/slick-theme.css">


</head>

<body>


    <header id="header" class="fixed-top">
        <div class="container">
            <div class="logo float-left">
                <!-- <i class="fa fa-map-marker text-danger" style="border-bottom: 1px solid red;"></i> -->

                <a href="<?php echo base_url() ?>" class="logo"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="" width="140px"></a>
            </div>
            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li class="drop-down"><a href="#">Pages</a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a></li>

                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
            <!-- main-nav -->
        </div>
    </header>
    <!-- #header -->