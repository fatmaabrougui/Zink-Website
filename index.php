<?PHP
        require_once "../core/eventC.php";
        $event1C=new eventC();
        $listeevents=$event1C->afficherevents();
        $sql="SELECT  * from event ";
$db = config::getConnexion();
$liste=$db->query($sql);


include "../core/promotionC.php";
$promotion1C=new promotionC();
$listepromotions=$promotion1C->afficherpromotions();

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Le Zink </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul class="mein_menu_list" id="navigation">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="service.html">Reservation</a></li>
                                        <li><a href="menu.php">menu</a></li>
                                        <li><a href="gallery.html">gallery</a></li>
                                        <div class="logo-img d-none d-lg-block">
                                                <a href="index.html">


                                                	<!-- LOGO IMAGE -->

                                                    <img src="img/logo.png" alt="">
                                                </a>
                                            </div>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="custom_order">
                                <a href="#" class="boxed_btn_white">Custom Order</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                        <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area-start -->
    <div class="slider_area zigzag_bg_2">
        <div class="slider_sctive owl-carousel">
            <div class="single_slider slider_img_1">
                <div class="single_slider-iner">
                    <div class="slider_contant text-center">
                        <h3>Food Catering <br>
                            Service.</h3>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br>
                            face higher conduct standards especially in the workplace. That’s why it’s <br>
                                crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="single_slider slider_img_1">
                <div class="single_slider-iner">
                    <div class="slider_contant text-center">
                        <h3>Food Catering <br>
                            Service.</h3>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br>
                            face higher conduct standards especially in the workplace. That’s why it’s <br>
                                crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="single_slider slider_img_1">
                <div class="single_slider-iner">
                    <div class="slider_contant text-center">
                        <h3>Food Catering <br>
                            Service.</h3>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br>
                            face higher conduct standards especially in the workplace. That’s why it’s <br>
                                crucial that, as women.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area-end -->

    <!-- service_area-start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>Our Events</h3>
                    </div>
                </div>
            </div>
            <div class="row">
            <?PHP
						
						foreach($liste as $row ){
							?>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-calendar"></i>
                        </div>
                        <h4><?PHP echo $row['nom_event']; ?></h4>
                        <p><?PHP echo $row['type_event']; ?></p>
                        <p><?PHP echo $row['date_event']; ?></p>
                       
                    </div>
                </div>
                <?PHP
    }
    ?>
                   <!-- service_area-end -->

    <!-- order_area_start -->
    <div class="order_area">
        <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-70">
                            <h3>Promotions</h3>
                        </div>
                    </div>
                </div>
            <div class="row">
            <?PHP
            foreach($listepromotions as $row){
                $datejour = Date('Y/m/d');
            $datefin= $row['date_promo'];  

            //explode pour mettre la date du fin en format numerique: 12/05/2006  -> 12052006
     $dfin = explode("-", $datefin); 
     
            //explode pour mettre la date du jour en format numerique: 31/05/2009  -> 31052009
            $djour = explode("/", $datejour); 
            
            
     
     // Ensuite il suffit de comparer les deux valeurs
     
     //------Abonnement expiré;-------
     if ($djour>$dfin)
     { 
     ?>    

                               <div hidden class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb" >
                            <img src="img/order/promotions.jpg" alt="">
                            
                        </div>
                        <div class="order_info">
                            <h3><?PHP echo $row['nom_promo']; ?></h3>
                            <p><?PHP echo $row['desc_promo']; ?> <br></p>
                            <p><?PHP echo $row['date_promo']; ?> <br></p>                              
                        </div>
                    </div>
                </div>
                <?PHP
}

else {
    ?>
    <div class="col-xl-4 col-md-6">
    <div class="single_order">
        <div class="order_thumb">
            <img src="img/order/promotions.jpg" type="hidden" alt="">
            
        </div>
        <div class="order_info">
            <h3><?PHP echo $row['nom_promo']; ?></h3>
            <p><?PHP echo $row['desc_promo']; ?> <br></p>
            <p><?PHP echo $row['date_promo']; ?><br></p>                              
        </div>
    </div>
</div> 
<?PHP  
}
}
    ?>      
            </div>
        </div>
    </div>
    <!-- order_area_end -->

    <!-- testmonial_area_start -->
    <div class="testmonial_area banner-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title white mb-60">
                        <h3>Feedback from Customers</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/2.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/2.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/2.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end -->

    <!-- brand_area-start -->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3>Brands love to take Our Services</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                            standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/1.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/02.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/03.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/04.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/05.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/06.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/7.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/12.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/9.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/10.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/11.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/8.png" alt="">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- brand_area-end -->

    <!-- footer-start -->
    <footer class="footer_area footer-bg zigzag_bg_1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Top Products
                            </h3>
                            <ul>
                                <li><a href="#">Managed Website</a></li>
                                <li><a href="#"> Manage Reputation</a></li>
                                <li><a href="#">Power Tools</a></li>
                                <li><a href="#">Marketing Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Quick Links
                            </h3>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#"> Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Features
                            </h3>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Resources
                            </h3>
                            <ul>
                                <li><a href="#">Guides</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Experts</a></li>
                                <li><a href="#">Agencies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Newsletter
                            </h3>
                            <p class="offer_text" >You can trust us. we only send promo offers,</p>
                            <form action="#">
                                <input type="text" placeholder="Your email address">
                                <button type="submit"> <i class="ti-arrow-right"></i> </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-12 col-lg-8">
                        <div class="copyright">
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-12 col-lg-4">
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-dribbble"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-behance"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>