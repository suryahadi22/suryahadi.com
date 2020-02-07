<!doctype html>
<html lang="en">
<head>
<title>Suryahadi - This is Mine</title>
<meta charset="UTF-8">
<meta name="description" content="Portofolio Suryahadi">
<meta name="keywords" content="personal, portfolio">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Favicon -->   
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

<!-- Stylesheets -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css"/>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/reset.css"/>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css"/>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css"/>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css"/> 
    
<!-- Google Web fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

<!-- Font icons -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="<?= base_url(); ?>assets/icon-fonts/essential-regular-fonts/essential-icons.css"/>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
    
     <!-- Preloading --> 
    <div id="preloader">
    	<div class="spinner">
            <div class="uil-ripple-css" style="transform:scale(0.29);"><div></div><div></div></div>
        </div>
    </div>
    
    <nav>
        <div class="row">
            <div class="container">
                <div class="logo">
                    <img src="<?= base_url(); ?>assets/images/logo.png" alt="">
                </div>
                <div class="responsive"><i data-icon="m" class="icon"></i></div>
                <ul class="nav-menu">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">About</a></li>
                    <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
                    <li><a href="#blog" class="smoothScroll">Blog</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!--HOME-->
    <section class="home" id="home"> 
            <div class="home-content">
                <h1>I'm <span class="element">Suryahadi</span></h1>
                <div class="social">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>  </a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>  </a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>  </a>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i>  </a>
                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i>  </a>
                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i>  </a>
                </div>
                <a class="home-down bounce" href="#about"><i class="fa fa-angle-down"></i></a>
            </div>
    </section>
    <!--ABOUT-->
    <section class="about" id="about">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-6 about-image wow fadeInUp" data-wow-delay="0.4s">
                        <img src="<?= base_url(); ?>assets/images/about.jpg" alt="">
                    </div>
                    <div class="col-md-6 about-text wow fadeInUp" data-wow-delay="0.8s">
                        <div class="out">
                        <h2>Selamat Datang di Website Pribadi Saya</h2>
                        <br/>
                        <p>
                        <?= $ucapan; ?>, selamat datang di website saya.<br>
                        Perkenalkan, nama saya <strong>Suryahadi Eko Hanggoro</strong> saya berumur <?= $umur; ?> tahun.<br>
                        <br/><br/>
                        Saya adalah seorang developer. Dalam pekerjaan saya, kebanyakan saya mengerjakan aplikasi berbasis Web. Kadang saya juga mengerjakan aplikasi berbasis mobile, api, networking, dan server management.<br>
                        Silahkan scroll kebawah untuk melihat portofolio saya
                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- Container end -->
            <div class="container-fluid gray-bg">
                <div class="container what-can">
                    <!-- Graphic Design -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 feature">
                        <i class="fa fa-server"></i>
                        <h3>Server Management</h3>
                        <p>Mampu melakukan manajemen dan perawatan pada Server. </p>
                    </div>
                    <!-- Graphic Design -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 feature">
                        <i class="fa fa-wifi"></i>
                        <h3>Networking</h3>
                        <p>Saya mahir dalam mengkonfigurasi jaringan, mengelola alamat IP, setting access point, router, dan beberapa perangkat jaringan. </p>
                    </div>
                    <!-- Graphic Design -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 feature">
                        <i data-icon="!" class="icon"></i>
                        <h3>Development</h3>
                        <p>Saya menguasai bahasa pemrograman : php, html, css, js, python, flutter (dart). </p>
                    </div>
                    <!-- Graphic Design -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 feature">
                        <i data-icon="#" class="icon"></i>
                        <h3>IT Consultan</h3>
                        <p>Menganalisa dan merancang kebutuhan IT. </p>
                    </div>
                </div>
            </div>
    </section>
    
    <!--PORTFOLIO-->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>PORTFOLIO</h2>
                <div class="portfolio_filter">
                    <ul>
                        <li class="select-cat" data-filter="*">All</li>
                        <li data-filter=".web-design">Web Design</li>
                        <li data-filter=".aplication">Applications</li>
                        <li data-filter=".development">Development</li>
                    </ul>
                </div>
            </div>
            <!--Portfolio Items-->  
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="isotope_items row">
                        <!-- Item -->
                        <a href="https://www.youtube.com/watch?v=M-M3rdL_WLQ" class="popup-youtube single_item link development col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <i class="fa fa-play" aria-hidden="true"></i>   
                            <img src="<?= base_url(); ?>assets/images/work-1.jpg" alt=""> 
                        </a>
                        <!-- Item -->
                        <a href="<?= base_url(); ?>assets/images/work-2.jpg" class="single_item link aplication col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <img src="<?= base_url(); ?>assets/images/work-2.jpg" alt=""> 
                        </a>
                        <!-- Item -->
                        <a href="<?= base_url(); ?>assets/images/work-3.jpg" class="single_item link development col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                            <img src="<?= base_url(); ?>assets/images/work-3.jpg" alt=""> 
                        </a>
                        <!-- Item -->
                        <a href="<?= base_url(); ?>assets/images/work-4.jpg" class="single_item link web-design col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.2s">
                            <img src="<?= base_url(); ?>assets/images/work-4.jpg" alt=""> 
                        </a>
                        <!-- Item -->
                        <a href="<?= base_url(); ?>assets/images/work-5.jpg" class="single_item link aplication col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.5s">
                            <img src="<?= base_url(); ?>assets/images/work-5.jpg" alt=""> 
                        </a>
                        <!-- Item -->
                        <a href="<?= base_url(); ?>assets/images/work-6.jpg" class="single_item link aplication col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.8s">
                            <img src="<?= base_url(); ?>assets/images/work-6.jpg" alt=""> 
                        </a>
                    </div>
                </div>
                </div>
        </div>
    </section>
    
    <!-- BLOG -->
    <section class="blog" id="blog">
        <div class="container-fluid gray-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Tulisan Saya</h2>
                    <p>Beberapa karya tulis saya yang dapat anda baca.</p>
                </div>
                <!-- Blogs -->
                <div class="row">
                    <?php foreach ($blog as $hahablog) : ?>
                    <a href="<?= $hahablog['link']; ?>" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-content wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="<?= base_url(); ?>assets/images/blog-1.png">
                        </div>
                        <h1>By spite about do of do allow blush</h1>
                        <p>Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat.  </p>
                        <span class="blog-info">Larry Stark - 7 September 2016 </span>
                    </a>
                    <?php endforeach; ?>
                </div>
                <a href="blog-page.html" class="site-button"> READ MORE</a>
            </div>
        </div>
    </section>
    
    <!-- CONTACT -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>GET IN TOUCH</h2>
                <p>Out believe has request not how comfort evident. Up delight cousins we feeling <br/> minutes. Genius has looked end piqued spring. </p>
            </div>
            <!-- Contact Info -->
            <div class="row">
                <div class="col-md-offset-2 col-md-8 contact-information">
                    <div class="col-md-4 col-sm-4 col-xs-12 contact-info wow fadeInUp" data-wow-delay="0.4s">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>49 0216 514 25 25 <br/>0216 514 25 25</p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 contact-info wow fadeInUp" data-wow-delay="0.6s">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>1444 S. Alameda Street Los Angeles, California 90021</p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 contact-info wow fadeInUp" data-wow-delay="0.8s">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <p>info@alberto.com <br/> contact@alberto.com</p>
                    </div>
                </div> <!-- information end -->
                <!--Contact Form-->
                <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="1s">
                    <form class="col-md-12 contact-form" method="POST" action="mail.php">
                        <div class="row">
                            <!--Name-->
                            <div class="col-md-6">
                                <input id="con_name" name="con_name" class="form-inp requie" type="text" placeholder="Name">
                            </div>
                            <!--Email-->
                            <div class="col-md-6">
                                <input id="con_email" name="con_email" class="form-inp requie" type="text" placeholder="Email">
                            </div>
                            <div class="col-md-12">
                                <!--Message-->
                                <textarea name="con_message" id="con_message" class="requie" placeholder="Message" rows="8"></textarea>
                                <input id="con_submit" class="site-button" type="submit" value="SEND A MESSAGE">
                            </div>
                        </div>
                    </form>
                </div> <!-- contact form end -->
            </div>    
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="social">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>  </a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>  </a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>  </a>
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i>  </a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i>  </a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i>  </a>
            </div>
            <p>Copyright © <?= date('Y'); ?> Suryahadi, All rights Reserved.</p>
        </div>
    </footer>
    
<!-- Javascripts -->
<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script> 
<script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url(); ?>assets/js/typed.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>
    
    
 
</body>
</html>
