<?php
$CI =& get_instance();
$CI->load->library('tank_auth');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Egypt Car Chauffeur Services</title>
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="Egypt Car Chauffeur Services, Book Chauffeur Service, auto in Egypt, car hire, car rental, Egypt car hire, Egypt car loaner, Egypt car rental, Egypt car Transportation, Limo service in Egypt, Luxury Chauffeured Limousine, rent a car, rent car in Egypt, rental car, Private Cairo Airport Pickup &amp; Transfer" />        
        <meta name="description" content="Egypt Car is one among the freelance automotive rent firms that supply secure on-line bookings like airfield transfers , Chauffer driven rentals and destination Most major cities around Egypt, company transfers, Business conferences, Dinners, Out of city visits and company accounts.">
        <meta name="author" content="Egypt Car">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- CSS StyleSheets -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/ie.css">
        <script type="text/javascript" src="assets/js/html5.js"></script>
    <![endif]-->


        <!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
        <link rel="stylesheet" id="skinCSS" href="assets/css/skins/default.css">

    </head>
    <body style="overflow:hidden">

        <!-- site preloader start -->
        <div class="page-loader">
            <div class="loader-in"></div>
        </div>
        <!-- site preloader end -->

        <div class="pageWrapper">

            <!-- Header Start -->
            <div id="headWrapper" class="clearfix">

                <!-- top bar start -->
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="cell-5">
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i>info@egypt-car.com
                                        </a></li>
                                    <li><span><i class="fa fa-phone"></i> Call Us: +2 (0100) 44 68 796</span></li>
                                </ul>
                            </div>
                            <div class="cell-7 right-bar">
                                <ul class="right">
                                    <?php if($CI->tank_auth->is_logged_in()) : ?>
                                        <li><a href="<?php echo site_url('auth/logout'); ?>"><i class="fa fa-sign-out"></i>Logout</a></li>
                                    <?php else : ?>
                                        <li><a href="<?php echo site_url('auth/register'); ?>"><i class="fa fa-user"></i>Register</a></li>
                                        <li><a href="<?php echo site_url('auth/login'); ?>" ><i class="fa fa-unlock-alt"></i> Login</a></li>
                                    <?php endif ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top bar end -->

                <header class="top-head">
                    <div class="container">
                        <div class="row">
                            <div class="logo cell-3">
                                <a href="home.html"></a>
                            </div>
                            <div class="cell-9 top-menu">
                                <!-- top navigation menu start -->
                                <nav class="top-nav">
                                    <ul>
                                        <li class="selected"><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
                                        <li><a href="#"><i class="fa fa-cog"></i><span>Our Services</span></a></li>
                                        <li><a href="#"><i class="fa fa-automobile"></i><span>Our Fleet</span></a>
                                            <ul>
                                                <li><a href="#">Minivan</a>
                                                    <ul>
                                                        <li><a href="">Chrysler Grand Voyager</a></li>
                                                        <li><a href="">Chrysler Town &amp; Country</a></li>
                                                        <li><a href="">Kia Carnival</a></li>
                                                        <li><a href="">Toyota Previa</a></li>
                                                        <li><a href="">Hyundai H1</a></li>                                                        
                                                    </ul>
                                                </li>
                                                <li><a href="#">Van</a>
                                                    <ul>
                                                        <li><a href="">Toyota Hiace</a></li>                                                        
                                                    </ul>
                                                </li>  
                                                <li><a href="#">Sedan</a>
                                                    <ul>
                                                        <li><a href="">Chevrolet Cruze</a></li>
                                                        <li><a href="">Chevrolet Aveo</a></li>                                                        
                                                        <li><a href="">Hyundai Accent</a></li>                                                        
                                                        <li><a href="">Hyundai Elantra</a></li>                                                        
                                                        <li><a href="">Kia Cerato</a></li>                                                        
                                                        <li><a href="">Toyota Corolla</a></li>                                                                                                                
                                                    </ul>
                                                </li>
                                                <li><a href="#">Luxury</a>
                                                    <ul>
                                                        <li><a href="">Mercedes-Benz E-Class</a></li>
                                                        <li><a href="">Mercedes-Benz S-Class</a></li>                                                        
                                                        <li><a href="">Hyundai Accent</a></li>                                                        
                                                        <li><a href="">Hyundai Elantra</a></li>                                                        
                                                        <li><a href="">Kia Cerato</a></li>                                                        
                                                        <li><a href="">Toyota Corolla</a></li>                                                                                                                
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-bank"></i><span>Top Cities</span></a>
                                            <ul>
                                                <li><a href="shop.html">Cairo</a></li>
                                                <li><a href="shop-no-bar.html">Giza</a></li>
                                                <li><a href="product.html">Alexandria</a></li>
                                                <li><a href="product-no-bar.html">Luxor</a></li>
                                                <li><a href="cart.html">Aswan</a></li>
                                                <li><a href="check-out.html">Sharm El Sheikh</a></li>
                                                <li><a href="check-out.html">Hurghada</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-question"></i><span>Special Request</span></a></li>
                                        <li><a href="#"><i class="fa fa-info"></i><span>About Us</span></a></li>                                        
                                        <li><a href="contact.html"><i class="fa fa-phone"></i><span>Contact</span></a></li>
                                    </ul>
                                </nav>
                                <!-- top navigation menu end -->

                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <!-- Header End -->

            <!-- Content Start -->
            <div class="sectionWrapper" style="padding-top: 20px;">
                <div class="container">
                    <div class="row">
                        <div class="cell-4 fx" data-animate="fadeInRight">
                            <div id="tabs" class="tabs">
                                <ul>
                                    <li class="active"><a href="#"><i class="fa fa-automobile"></i> Transfer service</a></li>
                                    <li class=""><a href="#"><i class="fa fa-clock-o"></i> Hourly service</a></li>
                                </ul>
                                <div class="tabs-pane" style="border-right: 1px #ccc solid;">
                                    <div class="tab-panel active" style="display: block;">
                                        <form action="#" id="reg_form" class="contact-form">
                                            <div class="form-input">
                                                <select required="">
                                                    <option selected="" value="">Please select Pickup location</option>  
                                                    <option value="AF">Australia</option>  
                                                    <option value="AL">Canada</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="AS">Russia</option>
                                                    <option value="AD">USA</option>
                                                </select>
                                            </div>
                                            <div class="form-input">
                                                <select required="">
                                                    <option selected="" value="">Please select Destination</option>  
                                                    <option value="AF">Australia</option>  
                                                    <option value="AL">Canada</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="AS">Russia</option>
                                                    <option value="AD">USA</option>
                                                </select>
                                            </div>
                                            <div class="form-input">
                                                <label>Vehicle Type <span class="red">*</span></label>
                                                <select>
                                                    <optgroup label="Sedan">                                                    
                                                        <option value="volvo">Chevrolet Cruze</option>
                                                        <option value="saab">Chevrolet Aveo</option>
                                                        <option value="saab">Hyundai Accent</option>
                                                        <option value="saab">Hyundai Elantra</option>
                                                        <option value="saab">Kia Cerato</option>
                                                        <option value="saab">Toyota Corolla</option>
                                                    </optgroup>
                                                    <optgroup label="Minivan">
                                                        <option value="mercedes">Chrysler Grand Voyager</option>
                                                        <option value="audi">Chrysler Town & Country</option>
                                                        <option value="audi">Kia Carnival</option>
                                                        <option value="audi">Toyota Previa</option>
                                                        <option value="audi">Hyundai H1</option>                                                                                                                                                                        
                                                    </optgroup>
                                                    <optgroup label="Van">
                                                        <option value="mercedes">Toyota Hiace</option>
                                                    </optgroup>  
                                                    <optgroup label="Luxury">
                                                        <option value="mercedes">Mercedes-Benz E-Class</option>
                                                        <option value="audi">Mercedes-Benz S-Class</option>
                                                    </optgroup>                                                    
                                                </select>
                                            </div>                                            
                                            <div class="form-input">
                                                <label>Pickup date<span class="red">*</span></label>
                                                <select name="birthday_day" required="" class="small-select">
                                                    <option value="-1">Day</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>

                                                <select id="birthday_month" required="" class="small-select">
                                                    <option value="-1">Month</option>
                                                    <option value="January">Jan</option>
                                                    <option value="February">Feb</option>
                                                    <option value="March">Mar</option>
                                                    <option value="April">Apr</option>
                                                    <option value="May">May</option>
                                                    <option value="June">Jun</option>
                                                    <option value="July">Jul</option>
                                                    <option value="August">Aug</option>
                                                    <option value="September">Sep</option>
                                                    <option value="October">Oct</option>
                                                    <option value="November">Nov</option>
                                                    <option value="December">Dec</option>
                                                </select>

                                                <select name="birthday_year" required="" class="small-select">
                                                    <option value="-1">Year</option>
                                                    <option value="2012">2014</option>
                                                    <option value="2011">2015</option>
                                                    <option value="2010">2016</option>
                                                    <option value="2009">2017</option>
                                                </select>
                                            </div>
                                            <div class="form-input">
                                                <label>Pickup Time<span class="red">*</span></label>
                                                <select name="time_hour" required="" class="small-select">
                                                    <option value="00:">00 (midnight)</option>
                                                    <option value="01:">01 (1 am)</option>
                                                    <option value="02:">02 (2 am)</option>
                                                    <option value="03:">03 (3 am)</option>
                                                    <option value="04:">04 (4 am)</option>
                                                    <option value="05:">05 (5 am)</option>
                                                    <option value="06:">06 (6 am)</option>
                                                    <option value="07:">07 (7 am)</option>
                                                    <option value="08:">08 (8 am)</option>
                                                    <option value="09:">09 (9 am)</option>
                                                    <option value="10:">10 (10 am)</option>
                                                    <option value="11:">11 (11 am)</option>
                                                    <option value="12:">12 (noon)</option>
                                                    <option value="13:">13 (1 pm)</option>
                                                    <option value="14:">14 (2 pm)</option>
                                                    <option value="15:" selected="selected">15 (3 pm)</option>
                                                    <option value="16:">16 (4 pm)</option>
                                                    <option value="17:">17 (5 pm)</option>
                                                    <option value="18:">18 (6 pm)</option>
                                                    <option value="19:">19 (7 pm)</option>
                                                    <option value="20:">20 (8 pm)</option>
                                                    <option value="21:">21 (9 pm)</option>
                                                    <option value="22:">22 (10 pm)</option>
                                                    <option value="23:">23 (11 pm)</option>
                                                </select>

                                                <select name="time_minute" required="" class="small-select">
                                                    <option value="00">00</option>
                                                    <option value="05">05</option>
                                                    <option value="10" selected="selected">10</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                    <option value="25">25</option>
                                                    <option value="30">30</option>
                                                    <option value="35">35</option>
                                                    <option value="40">40</option>
                                                    <option value="45">45</option>
                                                    <option value="50">50</option>
                                                    <option value="55">55</option>
                                                </select>
                                            </div>                                                
                                            <div class="form-input">
                                                <input type="submit" class="btn btn-large main-bg" value="Calculate price">                                                
                                            </div>
                                        </form>                                                                                   
                                    </div>
                                    <div class="tab-panel" style="display: none;">
                                        <form action="#" id="reg_form" class="contact-form">
                                            <div class="form-input">
                                                <select required="">
                                                    <option selected="" value="">Please select Pickup location</option>  
                                                    <option value="AF">Australia</option>  
                                                    <option value="AL">Canada</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="AS">Russia</option>
                                                    <option value="AD">USA</option>
                                                </select>
                                            </div>
                                            <div class="form-input">
                                                <select required="">
                                                    <option selected="" value="">Please select Duration</option>  
                                                    <option value="10800" selected="selected">3 hours</option>
                                                    <option value="21600">6 hours</option>
                                                    <option value="43200">12 hours</option>
                                                    <option value="43200">2 Days</option>
                                                    <option value="43200">3 Days</option>
                                                    <option value="43200">4 Days</option>
                                                    <option value="43200">5 Days</option>
                                                    <option value="43200">6 Days</option>
                                                    <option value="86400">1 Week</option>
                                                    <option value="86400">2 Week</option>
                                                    <option value="86400">3 Week</option>                                                    
                                                    <option value="86400">1 Month</option>
                                                    <option value="86400">2 Month</option>
                                                    <option value="86400">3 Month</option>                                                                                                        
                                                </select>
                                            </div>  
                                            <div class="form-input">
                                                <select required="">
                                                    <option selected="" value="">Please select Pickup location</option>  
                                                    <option value="AF">Australia</option>  
                                                    <option value="AL">Canada</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="AS">Russia</option>
                                                    <option value="AD">USA</option>
                                                </select>
                                            </div>                                            
                                            <div class="form-input">
                                                <label>Vehicle Type <span class="red">*</span></label>
                                                <select>
                                                    <optgroup label="Sedan">                                                    
                                                        <option value="volvo">Chevrolet Cruze</option>
                                                        <option value="saab">Chevrolet Aveo</option>
                                                        <option value="saab">Hyundai Accent</option>
                                                        <option value="saab">Hyundai Elantra</option>
                                                        <option value="saab">Kia Cerato</option>
                                                        <option value="saab">Toyota Corolla</option>
                                                    </optgroup>
                                                    <optgroup label="Minivan">
                                                        <option value="mercedes">Chrysler Grand Voyager</option>
                                                        <option value="audi">Chrysler Town & Country</option>
                                                        <option value="audi">Kia Carnival</option>
                                                        <option value="audi">Toyota Previa</option>
                                                        <option value="audi">Hyundai H1</option>                                                                                                                                                                        
                                                    </optgroup>
                                                    <optgroup label="Van">
                                                        <option value="mercedes">Toyota Hiace</option>
                                                    </optgroup>  
                                                    <optgroup label="Luxury">
                                                        <option value="mercedes">Mercedes-Benz E-Class</option>
                                                        <option value="audi">Mercedes-Benz S-Class</option>
                                                    </optgroup>                                                    
                                                </select>
                                            </div>
                                            <div class="form-input">
                                                <label>Pickup Time<span class="red">*</span></label>
                                                <select name="time_hour" required="" class="small-select">
                                                    <option value="00:">00 (midnight)</option>
                                                    <option value="01:">01 (1 am)</option>
                                                    <option value="02:">02 (2 am)</option>
                                                    <option value="03:">03 (3 am)</option>
                                                    <option value="04:">04 (4 am)</option>
                                                    <option value="05:">05 (5 am)</option>
                                                    <option value="06:">06 (6 am)</option>
                                                    <option value="07:">07 (7 am)</option>
                                                    <option value="08:">08 (8 am)</option>
                                                    <option value="09:">09 (9 am)</option>
                                                    <option value="10:">10 (10 am)</option>
                                                    <option value="11:">11 (11 am)</option>
                                                    <option value="12:">12 (noon)</option>
                                                    <option value="13:">13 (1 pm)</option>
                                                    <option value="14:">14 (2 pm)</option>
                                                    <option value="15:" selected="selected">15 (3 pm)</option>
                                                    <option value="16:">16 (4 pm)</option>
                                                    <option value="17:">17 (5 pm)</option>
                                                    <option value="18:">18 (6 pm)</option>
                                                    <option value="19:">19 (7 pm)</option>
                                                    <option value="20:">20 (8 pm)</option>
                                                    <option value="21:">21 (9 pm)</option>
                                                    <option value="22:">22 (10 pm)</option>
                                                    <option value="23:">23 (11 pm)</option>
                                                </select>

                                                <select name="time_minute" required="" class="small-select">
                                                    <option value="00">00</option>
                                                    <option value="05">05</option>
                                                    <option value="10" selected="selected">10</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                    <option value="25">25</option>
                                                    <option value="30">30</option>
                                                    <option value="35">35</option>
                                                    <option value="40">40</option>
                                                    <option value="45">45</option>
                                                    <option value="50">50</option>
                                                    <option value="55">55</option>
                                                </select>
                                            </div>                                                
                                            <div class="form-input">
                                                <input type="submit" class="btn btn-large main-bg" value="Calculate price">                                                
                                            </div>
                                        </form>                                     
                                    </div>
                                </div>
                            </div>                               
                        </div>
                        <div class="cell-8 fx" data-animate="fadeInLeft">
                            <div class="portfolio-img-slick">
                                <div>
                                    <a href="assets/images/blog/1.jpg" class="zoom" data-gal="prettyPhoto" title="Project image 1"><img alt="" src="assets/images/blog/1.jpg"></a>
                                </div>
                                <div>
                                    <a href="assets/images/blog/2.jpg" class="zoom" data-gal="prettyPhoto" title="Project image 2"><img alt="" src="assets/images/blog/2.jpg"></a>
                                </div>
                                <div>
                                    <a href="assets/images/blog/3.jpg" class="zoom" data-gal="prettyPhoto" title="Project image 3"><img alt="" src="assets/images/blog/3.jpg"></a>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>
            </div>
            <div class="sectionWrapper" style="padding-top: 0px;"> 
                <div class="container"> <div class="row"> 
                        <div class="cell-8"> <!-- Responsive Web Design start --> 
                            <div class="fx animated fadeInLeft" data-animate="fadeInLeft"> 
                                <h3 class="block-head">About Us</h3> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit, dapibus ac augue ut, porttitor viverra dui. Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit, apibus ac augue ut, porttitor viverra dui. Lorem ipsum dolor sit amet, consectet urapibus ac augue ut, porttitor viverra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <ul class="list prim list-ok"> 
                                    <li class="fx animated fadeInLeft" data-animate="fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque</li> 
                                    <li class="fx animated fadeInLeft" data-animate="fadeInLeft" data-animation-delay="200" style="-webkit-animation: 200ms;">Suspendisse hendrerit id lacus id lobortis vestibulum quam elit</li> 
                                    <li class="fx animated fadeInLeft" data-animate="fadeInLeft" data-animation-delay="400" style="-webkit-animation: 400ms;">Fusce scelerisque pellentesqu suspendisse elementum adipiscing</li> 
                                    <li class="fx animated fadeInLeft" data-animate="fadeInLeft" data-animation-delay="600" style="-webkit-animation: 600ms;">Feugiat sodales pretium massa euismod tempus suspendisse hendrerit</li> 
                                </ul> 
                            </div> <!-- Responsive Web Design end --> 
                        </div> <!-- right devices image start --> 
                        <div class="cell-4 fx animated flipInX" data-animate="flipInX"> 
                            <div class="padd-top-25 center"> 
                                <img alt="" src="assets/images/about-us.jpg"> 
                            </div> 
                        </div> <!-- right devices image end --> 
                    </div> 
                </div> 
            </div>

            <div class="sectionWrapper" style="padding-top: 0px;">
                <div class="container">
                    <h3 class="block-head">Our Services</h3>
                    <div class="row padd-top-25">
                        <div class="cell-3 service-box-2 fx animated fadeInDown" data-animate="fadeInDown">
                            <div class="box-2-cont">
                                <i class="fa fa-plane"></i>
                                <h4>Clean &amp; Powrfull</h4>
                                <div class="center sub-title main-color">sub title</div>
                                <p class="mediumFont">Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.</p>
                                <a class="r-more main-color" href="services.html">Read More</a>
                            </div>
                        </div>
                        <div class="cell-3 service-box-2 fx animated fadeInDown" data-animate="fadeInDown" data-animation-delay="200" style="-webkit-animation: 200ms;">
                            <div class="box-2-cont">
                                <i class="fa fa-cab"></i>
                                <h4>Fast &amp; Fresh</h4>
                                <div class="center sub-title main-color">sub title</div>
                                <p class="mediumFont">Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.</p>
                                <a class="r-more main-color" href="services.html">Read More</a>
                            </div>
                        </div>
                        <div class="cell-3 service-box-2 fx animated fadeInDown" data-animate="fadeInDown" data-animation-delay="400" style="-webkit-animation: 400ms;">
                            <div class="box-2-cont">
                                <i class="fa fa-clock-o"></i>
                                <h4>User Experience</h4>
                                <div class="center sub-title main-color">sub title</div>
                                <p class="mediumFont">Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.Proin gravida lorem quis bibendum auctor, nisi elit consequipsum.Proin gravida nibh vel velit auctor.</p>
                                <a class="r-more main-color" href="services.html">Read More</a>
                            </div>
                        </div>
                        <div class="cell-3 service-box-2 fx animated fadeInDown" data-animate="fadeInDown" data-animation-delay="600" style="-webkit-animation: 600ms;">
                            <div class="box-2-cont">
                                <i class="fa fa-thumb-tack"></i>
                                <h4>Responsive Layout</h4>
                                <div class="center sub-title main-color">sub title</div>
                                <p class="mediumFont">Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.</p>
                                <a class="r-more main-color" href="services.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row padd-top-25">
                        <div class="cell-3 service-box-2 fx animated fadeInDown" data-animate="fadeInDown">
                            <div class="box-2-cont">
                                <i class="fa fa-road"></i>
                                <h4>Clean &amp; Powrfull</h4>
                                <div class="center sub-title main-color">sub title</div>
                                <p class="mediumFont">Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.</p>
                                <a class="r-more main-color" href="services.html">Read More</a>
                            </div>
                        </div>
                        <div class="cell-3 service-box-2 fx animated fadeInDown" data-animate="fadeInDown" data-animation-delay="200" style="-webkit-animation: 200ms;">
                            <div class="box-2-cont">
                                <i class="fa fa-group"></i>
                                <h4>Fast &amp; Fresh</h4>
                                <div class="center sub-title main-color">sub title</div>
                                <p class="mediumFont">Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.</p>
                                <a class="r-more main-color" href="services.html">Read More</a>
                            </div>
                        </div>
                        <div class="cell-3 service-box-2 fx animated fadeInDown" data-animate="fadeInDown" data-animation-delay="400" style="-webkit-animation: 400ms;">
                            <div class="box-2-cont">
                                <i class="fa fa-dollar"></i>
                                <h4>User Experience</h4>
                                <div class="center sub-title main-color">sub title</div>
                                <p class="mediumFont">Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.Proin gravida lorem quis bibendum auctor, nisi elit consequipsum.Proin gravida nibh vel velit auctor.</p>
                                <a class="r-more main-color" href="services.html">Read More</a>
                            </div>
                        </div>
                        <div class="cell-3 service-box-2 fx animated fadeInDown" data-animate="fadeInDown" data-animation-delay="600" style="-webkit-animation: 600ms;">
                            <div class="box-2-cont">
                                <i class="fa fa-heart"></i>
                                <h4>Responsive Layout</h4>
                                <div class="center sub-title main-color">sub title</div>
                                <p class="mediumFont">Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi elit consequipsum.</p>
                                <a class="r-more main-color" href="services.html">Read More</a>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="sectionWrapper" style="padding-top: 0px;">
                <div class="container">
                    <div class="row">
                        <!-- about us left block -->
                        <div class="cell-12">								
                            <!-- testimonials start -->
                            <div class="fx" data-animate="fadeInLeft">
                                <h3 class="block-head">What They Said About Us</h3>

                                <div class="testimonials-1">
                                    <!-- testimonials item start -->
                                    <div>
                                        <div class="testimonials-bg">
                                            <img alt="" src="images/people/1.jpg" class="testimonials-img">
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesqueLorem ipsum dolor sit amet, consectetur.</span>
                                            <div class="rating">
                                                <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span>
                                            </div>
                                        </div>
                                        <div class="testimonials-name"><strong>John Smith:</strong> ThemeForest</div>
                                    </div>
                                    <!-- testimonials item end -->

                                    <!-- testimonials item start -->
                                    <div>
                                        <div class="testimonials-bg">
                                            <img alt="" src="assets/images/people/1.jpg" class="testimonials-img">
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesqueLorem ipsum dolor sit amet, consectetur.</span>
                                            <div class="rating">
                                                <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                        <div class="testimonials-name"><strong>Ellina Willaims: </strong>Envato Market</div>
                                    </div>
                                    <!-- testimonials item end -->

                                    <!-- testimonials item start -->
                                    <div>
                                        <div class="testimonials-bg">
                                            <img alt="" src="assets/images/people/1.jpg" class="testimonials-img">
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesqueLorem ipsum dolor sit amet, consectetur.</span>
                                            <div class="rating">
                                                <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span>
                                            </div>
                                        </div>
                                        <div class="testimonials-name"><strong>Joanne Alexander: </strong>Vodafone</div>
                                    </div>
                                    <!-- testimonials item end -->

                                    <!-- testimonials item start -->
                                    <div>
                                        <div class="testimonials-bg">
                                            <img alt="" src="assets/images/people/1.jpg" class="testimonials-img">
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesqueLorem ipsum dolor sit amet, consectetur.</span>
                                            <div class="rating">
                                                <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                        <div class="testimonials-name"><strong>Danny Willaims: </strong>HSBC Bank</div>
                                    </div>
                                    <!-- testimonials item end -->

                                </div>
                            </div>
                            <!-- testimonials end -->

                        </div>
                        <!-- about us left block end -->						
                    </div>
                </div>
        </div>
        <!-- Content End -->

        <!-- Footer start -->
        <footer id="footWrapper">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- main menu footer cell start -->
                        <div class="cell-3">
                            <h3 class="block-head">Main Menu</h3>
                            <ul class="footer-menu">
                                <li><a href="home.html">Home Page</a></li>
                                <li><a href="about-us.html">Terms and Conditions</a></li>
                                <li><a href="blog.html">Site Map</a></li>
                                <li><a href="portfolio-4-cols.html">FAQ</a></li>
                                <li><a href="FAQ.html">Our Blog</a></li>                                
                            </ul>
                        </div>
                        <!-- main menu footer cell start -->

                        <!-- Our Friends footer cell start -->
                        <div class="cell-3">
                            <h3 class="block-head">Our Friends</h3>
                            <ul class="footer-menu">
                                <li><a href="#">adipiscing elit Integer</a></li>
                                <li><a href="#">magna euismod</a></li>
                                <li><a href="#">purus molestie</a></li>
                                <li><a href="#">adipiscing elit Integer</a></li>
                                <li><a href="#">purus molestie</a></li>
                            </ul>
                        </div>
                        <!-- Our Friends footer cell start -->

                        <!-- Useful Links footer cell start -->
                        <div class="cell-3">
                            <h3 class="block-head">Useful Links</h3>
                            <ul class="footer-menu">
                                <li><a href="privacy.html">Privacy policy</a></li>
                                <li><a href="terms.html">Terms of use</a></li>
                                <li><a href="#">purus molestie</a></li>
                                <li><a href="#">adipiscing elit Integer</a></li>
                                <li><a href="#">magna euismod</a></li>
                            </ul>
                        </div>
                        <!-- Useful Links footer cell start -->

                        <!-- Tags Cloud footer cell start -->
                        <div class="cell-3">
                            <h3 class="block-head">Tag Cloud</h3>
                            <div class="tags">
                                <a href="#">Egypt Car Chauffeur Services</a>
                                <a href="#">Book Chauffeur Service</a>
                                <a href="#">Auto in Egypt</a>
                                <a href="#">Car Rental</a>
                                <a href="#">Egypt Car Rental</a>
                                <a href="#">Limo Service</a>
                                <a href="#">Egypt car Transportation</a>
                            </div>
                        </div>
                        <!-- Tags Cloud footer cell start -->

                        <div class="clearfix"></div>
                        <hr class="hr-style5">
                        <div class="clearfix"></div>

                        <!-- contact us footer cell start -->
                        <div class="cell-3">
                            <h3 class="block-head">Keep in Touch</h3>
                            <ul>
                                <li class="footer-contact"><i class="fa fa-home"></i><span>12 Suzan Mobark, Hadayk el Qoba, Cairo, Egypt.</span></li>
                                <li class="footer-contact"><i class="fa fa-globe"></i><span><a href="#">info@egypt-car.com</a></span></li>
                                <li class="footer-contact"><i class="fa fa-phone"></i><span>+2 (0100) 44-68-796</span></li>
                                <li class="footer-contact"><i class="fa fa-skype"></i><span>egypt_car</span></li>                                
                            </ul>
                        </div>
                        <!-- contact us footer cell end -->

                        <!-- Newsletters footer cell start -->
                        <div class="cell-3">
                            <div class="foot-logo"></div>
                            <p class="no-margin">Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
                            <form class="NL">
                                <div class="skew-25 input-box left">
                                    <input type="text" class="txt-box skew25" placeholder="Enter Yor Email" required>
                                </div>
                                <div class="left skew-25 NL-btn">
                                    <input class="btn skew25" type="submit" value="Send" />
                                </div>
                            </form>
                        </div>
                        <!-- Newsletters footer cell start -->

                        <!-- latest tweets footer cell start -->
                        <div class="cell-3">
                            <h3 class="block-head">Latest Tweets</h3>
                            <div class="tweet">
                                <p><span class="fa fa-twitter"></span>Check our portfolio at <a href="#">EXCEPTION</a> to get more information about us.</p>
                                <p><a href="https://twitter.com/">https://twitter.com/</a></p>
                                <p>30 Jan. 2014</p>
                            </div>
                        </div>
                        <!-- latest tweets footer cell start -->

                        <!-- flickr stream footer cell start -->
                        <div class="cell-3 flickr-stream-w">
                            <h3 class="block-head">Latest Blog Article</h3>
                            <div class="testimonials-2">
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesqueLorem</p>
                                </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesqueLorem</p>
                                </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesqueLorem</p>
                                </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesqueLorem</p>
                                </div>
                            </div>
                        </div>
                        <!-- flickr stream footer cell start -->
                    </div>
                </div>	
            </div>

            <!-- footer bottom bar start -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <!-- footer copyrights left cell -->
                        <div class="copyrights cell-5">&copy; Copyrights <b>EXCEPTION</b> 2014. All rights reserved. <span><a href="privacy.html">Privacy policy</a> | <a href="terms.html">Terms of use</a></span></div>

                        <!-- footer social links right cell start -->
                        <div class="cell-7">
                            <ul class="social-list right">
                                <li class="skew-25"><a href="#" data-title="dribbble" data-tooltip="true"><span class="fa fa-dribbble skew25"></span></a></li>
                                <li class="skew-25"><a href="#" data-title="facebook" data-tooltip="true"><span class="fa fa-facebook skew25"></span></a></li>
                                <li class="skew-25"><a href="#" data-title="linkedin" data-tooltip="true"><span class="fa fa-linkedin skew25"></span></a></li>
                                <li class="skew-25"><a href="#" data-title="skype" data-tooltip="true"><span class="fa fa-skype skew25"></span></a></li>
                                <li class="skew-25"><a href="#" data-title="tumbler" data-tooltip="true"><span class="fa fa-tumblr skew25"></span></a></li>
                                <li class="skew-25"><a href="#" data-title="twitter" data-tooltip="true"><span class="fa fa-twitter skew25"></span></a></li>
                                <li class="skew-25"><a href="#" data-title="YouTube" data-tooltip="true"><span class="fa fa-youtube skew25"></span></a></li>
                            </ul>
                        </div>
                        <!-- footer social links right cell end -->

                    </div>
                </div>
            </div>
            <!-- footer bottom bar end -->

        </footer>
        <!-- Footer end -->

        <!-- Back to top Link -->
        <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

    </div>

    <!-- Load JS siles -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>

    <!-- Waypoints script -->
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Animate numbers increment -->
    <script type="text/javascript" src="assets/js/jquery.animateNumber.min.js"></script>

    <!-- slick slider carousel -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>

    <!-- Animate numbers increment -->
    <script type="text/javascript" src="assets/js/jquery.easypiechart.min.js"></script>

    <!-- PrettyPhoto script -->
    <script type="text/javascript" src="assets/js/jquery.prettyPhoto.js"></script>

    <!-- Share post plugin script -->
    <script type="text/javascript" src="assets/js/jquery.sharrre.min.js"></script>

    <!-- Product images zoom plugin -->
    <script type="text/javascript" src="assets/js/jquery.elevateZoom-3.0.8.min.js"></script>

    <!-- Input placeholder plugin -->
    <script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>

    <!-- general script file -->
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>