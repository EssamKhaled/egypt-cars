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
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/prettyPhoto.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/rs-plugin/css/settings.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>">
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/ie.css')?>">
        <script type="text/javascript" src="<?php echo base_url('assets/js/html5.js')?>"></script>
    <![endif]-->


        <!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
        <link rel="stylesheet" id="skinCSS" href="<?php echo base_url('assets/css/skins/default.css')?>">

    </head>
    

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
                                        <?php if($CI->tank_auth->get_user_id() == 1) : ?>
                                            <li><a href="<?php echo site_url('../admin.php'); ?>"><i class="fa fa-dashboard"></i>Admin Panel</a></li>                                    
                                        <?php endif ?>                                            
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
                                <a href="<?php echo site_url(); ?>"></a>
                            </div>
                            <div class="cell-9 top-menu">
                                <!-- top navigation menu start -->
                                <nav class="top-nav">
                                    <ul>
                                        <li class="selected"><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
                                        <li><a href="<?php echo site_url('our_services'); ?>"><i class="fa fa-cog"></i><span>Our Services</span></a></li>
                                        <li><a href="#"><i class="fa fa-automobile"></i><span>Our Fleet</span></a>
                                            <ul>
                                                <?php
                                                    $car_type_query = $CI->db->get('car_type');
                                                    $car_types = $car_type_query->result();
                                                ?>
                                                <?php foreach($car_types as $car_type) : ?>
                                                    <li><a href="#"><?php echo $car_type->type_name; ?></a>
                                                    <?php
                                                        $fleet_query = $CI->db->get_where('our_fleet',array('car_type' => $car_type->id ));
                                                        $fleets = $fleet_query->result();
                                                    ?>
                                                        <?php if($fleets) : ?>
                                                        <ul>
                                                            <?php foreach($fleets as $fleet) : ?>
                                                                <li><a href=""><?php echo $fleet->car_name; ?></a></li>
                                                            <?php endforeach; ?>                                                       
                                                        </ul>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; ?>             
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-bank"></i><span>Top Cities</span></a>
                                            <ul>
                                                <?php
                                                    $CI->db->select('id,city_name');
                                                    $query = $CI->db->get_where('top_cities', array('publish' => 1));                                                                                                        
                                                ?>
                                                <?php foreach($query->result() as $city) : ?>
                                                    <li><a href="<?php echo site_url('top_cities/more/'.$city->city_name.'/'.$city->id); ?>"><?php echo $city->city_name; ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo site_url('special_request'); ?>"><i class="fa fa-question"></i><span>Special Request</span></a></li>
                                        <li><a href="<?php echo site_url('about_us'); ?>"><i class="fa fa-info"></i><span>About Us</span></a></li>                                        
                                        <li><a href="<?php echo site_url('contact_us'); ?>"><i class="fa fa-phone"></i><span>Contact</span></a></li>
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
                                    <li class="active"><a href="#" class="tab-button"><i class="fa fa-automobile"></i> Transfer service</a></li>
                                    <li class=""><a href="#" class="tab-button"><i class="fa fa-clock-o"></i> Hourly service</a></li>
                                </ul>
                                <div class="tabs-pane" style="border-right: 1px #ccc solid;">
                                    <div id="map" style="position: absolute;z-index: -5;width: 84%;">
                                        <span class="btn main-bg" id="close-map" style="z-index: 10;position: absolute;"><li class="fa fa-times fa-lg "></li> Close</span>
                                        <div id="map_canvas" style="height: 360px;"></div>                                 
                                    </div>
                                   
                                    <?php if($this->session->flashdata('please_login')) : ?>
                                        <div class="box error-box fx animated fadeInLeft" data-animate="fadeInLeft">
                                            <a class="close-box" href="#"><i class="fa fa-times"></i></a>
                                            <h3>Please Login</h3>
                                            <p><?php echo $this->session->flashdata('please_login'); ?></p>
                                        </div>                                             
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('create_order_successful')) : ?>
                                        <div class="box success-box fx animated fadeInLeft" data-animate="fadeInLeft">
                                            <a class="close-box" href="#"><i class="fa fa-times"></i></a>
                                            <h3>Thank you!</h3>
                                            <p><?php echo $this->session->flashdata('create_order_successful'); ?></p>
                                        </div>                                             
                                    <?php endif; ?>                                    
                                    <div class="tab-panel active" id="tab1" style="display: block;background-color: #fff;">                                                                            
                                        <form action="<?php echo site_url('transfer_order/new_order'); ?>" id="transfer_service" class="contact-form">
                                            <div id="transfer-service-step1">
                                                <div class="form-input">
                                                    <input type="text" name="pickup_location" id="start" placeholder="Please select Pickup location" />
                                                </div>
                                                <div class="form-input">
                                                    <input type="text" name="pickup_destination" id="end" placeholder="Please select Pickup Destination" />
                                                </div>
                                                <div class="form-input">
                                                    <label>Vehicle Type <span class="red">*</span></label>
                                                    <select name="car_type" id="car_type">
                                                    <?php
                                                        $form_car_type_query = $CI->db->get('car_type');
                                                        $form_car_types = $form_car_type_query->result();
                                                    ?>
                                                    <?php foreach($form_car_types as $car_type) : ?>
                                                        <optgroup label="<?php echo $car_type->type_name; ?>">
                                                        <?php
                                                            $fleet_query = $CI->db->get_where('our_fleet',array('car_type' => $car_type->id ));
                                                            $fleets = $fleet_query->result();
                                                        ?>
                                                            <?php if($fleets) : ?>
                                                                <?php foreach($fleets as $fleet) : ?>
                                                                    <option value="<?php echo $fleet->id; ?>" car-type="<?php echo $car_type->id; ?>"><?php echo $fleet->car_name; ?></option>
                                                                <?php endforeach; ?>                                                       
                                                            <?php endif; ?>
                                                        </optgroup>
                                                    <?php endforeach; ?>                                                     
                                                    </select>
                                                    <input type="hidden" name="car_model" id="car_model_input">
                                                </div>                                            
                                                <div class="form-input">
                                                    <label>Pickup date<span class="red">*</span></label>
                                                    <select name="pickup_day" required="" class="small-select">
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

                                                    <select id="pickup_month" name="pickup_month" required="" class="small-select">
                                                        <option value="-1">Month</option>
                                                        <option value="01">Jan</option>
                                                        <option value="02">Feb</option>
                                                        <option value="03">Mar</option>
                                                        <option value="04">Apr</option>
                                                        <option value="05">May</option>
                                                        <option value="06">Jun</option>
                                                        <option value="07">Jul</option>
                                                        <option value="08">Aug</option>
                                                        <option value="09">Sep</option>
                                                        <option value="10">Oct</option>
                                                        <option value="11">Nov</option>
                                                        <option value="12">Dec</option>
                                                    </select>

                                                    <select name="pickup_year" required="" class="small-select">
                                                        <option value="-1">Year</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                    </select>
                                                </div>
                                                <div class="form-input">
                                                    <label>Pickup Time<span class="red">*</span></label>
                                                    <select name="pickup_hour" required="" class="small-select">
                                                        <option value="00">00 (midnight)</option>
                                                        <option value="01">01 (1 am)</option>
                                                        <option value="02">02 (2 am)</option>
                                                        <option value="03">03 (3 am)</option>
                                                        <option value="04">04 (4 am)</option>
                                                        <option value="05">05 (5 am)</option>
                                                        <option value="06">06 (6 am)</option>
                                                        <option value="07">07 (7 am)</option>
                                                        <option value="08">08 (8 am)</option>
                                                        <option value="09">09 (9 am)</option>
                                                        <option value="10">10 (10 am)</option>
                                                        <option value="11">11 (11 am)</option>
                                                        <option value="12">12 (noon)</option>
                                                        <option value="13">13 (1 pm)</option>
                                                        <option value="14">14 (2 pm)</option>
                                                        <option value="15" selected="selected">15 (3 pm)</option>
                                                        <option value="16">16 (4 pm)</option>
                                                        <option value="17">17 (5 pm)</option>
                                                        <option value="18">18 (6 pm)</option>
                                                        <option value="19">19 (7 pm)</option>
                                                        <option value="20">20 (8 pm)</option>
                                                        <option value="21">21 (9 pm)</option>
                                                        <option value="22">22 (10 pm)</option>
                                                        <option value="23">23 (11 pm)</option>
                                                    </select>

                                                    <select name="pickup_minute" required="" class="small-select">
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
                                                    <span class="left small-txt-box marginRight">
                                                        <button  id="show-map-btn" class="btn empty alter-border btn-mini" style="height: 39px;display: none;"><li class="fa fa-map-marker"></li> &nbsp; Show Map</button>
                                                    </span>                                                    
                                                </div>  
                                                <div class="form-input">
                                                    <div class="staff-3" style="display: none;">
                                                        <div class="cell-6 fx animated bounceIn" data-animate="bounceIn" data-animation-delay="200" style="-webkit-animation: 200ms;">
                                                            <div class="gry-bg">
                                                                <div class="fun-number" id="distance"></div>
                                                                <div class="fun-text">Distance Km</div>
                                                                <input type="hidden" name="distance" id="distance_input">
                                                            </div>
                                                        </div>
                                                        <div class="cell-6 fx animated bounceIn" data-animate="bounceIn" data-animation-delay="200" style="-webkit-animation: 200ms;">
                                                            <div class="gry-bg">
                                                                <div class="fun-number" id="price"></div>
                                                                <div class="fun-text">Price EGP</div>
                                                                <input type="hidden" name="price" id="price_input">                                                                
                                                            </div>
                                                        </div>                                                         
                                                    </div>                               
                                                </div>                                            
                                                <div class="form-input">
                                                    <input class="btn btn-large calculate" style="width: 49%" value="Calculate price">                                                
                                                    <input class="btn btn-large main-bg" id="next_transfer" style="width: 49%; display: none;" value="Next">                                                
                                                </div>
                                            </div>
                                            <div id="transfer-service-step2" style="display: none;">
                                                <div class="form-input">
                                                    <label>Flight number</label>                                                    
                                                    <input type="text" name="airliine" class="datepicker-input"  placeholder="Airline (like Egypt Air" class="small_text" />
                                                    <input type="text" name="flight_number"  placeholder="Flight Number (like 7314)" class="small_text" style="margin-top: 10px;" />                                                    
                                                </div>
                                                <div class="form-input">
                                                    <label>Text on pickup sign</label>                                                    
                                                    <input type="text" name="pickup_sign"  placeholder="e.g. the passenger's name" class="small_text" />
                                                </div> 
                                                <div class="form-input">
                                                    <label>Own reference number</label>                                                    
                                                    <input type="text" name="reference_number"  placeholder="Accounting department number" class="small_text" />
                                                </div> 
                                                <div class="form-input">
                                                    <label>Additional comments for your chauffeur</label>                                                    
                                                    <textarea  name="additional_comments" cols="40" rows="7" placeholder="Please enter any information that your chauffeur might need here, e.g. children's seats including the age of the children."></textarea>                                                
                                                </div>  
                                                <div class="form-input">
                                                    <input class="btn btn-large" id="back_transfer" style="width: 49%" value="Back">                                                
                                                    <input type="submit" class="btn btn-large main-bg" id="next_transfer" style="width: 49%;" value="Book">                                                
                                                </div>                                                
                                            </div>
                                        </form>                                                                                                                              
                                    </div>
                                    <div class="tab-panel" style="display: none;background-color: #fff;">
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
                            <div>
                                <?php echo $first_content; ?>
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
            </div>
            <?php echo $second_content; ?>
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
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/waypoints.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/rs-plugin/js/jquery.themepunch.tools.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/rs-plugin/js/jquery.themepunch.revolution.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.animateNumber.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/slick.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easypiechart.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.prettyPhoto.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.sharrre.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.elevateZoom-3.0.8.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.placeholder.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/script.js')?>"></script>
    
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.geocomplete.js')?>"></script>
    
    <script type="text/javascript" src="http://inorganik.github.io/countUp.js/countUp.js"></script>
    <script type="text/javascript">
        
    function count($this){
        var current = parseInt($this.html(), 10);
        $this.html(++current);
        if(current !== $this.data('count')){
            setTimeout(function(){count($this)}, 50);
        }
    }  
    
    $(function(){
        $("#start, #end").geocomplete({
        country: 'eg'
        });
    });

    var directionDisplay;
    var directionsService = new google.maps.DirectionsService();
    var map;
		
    function initialize() {
        directionsDisplay = new google.maps.DirectionsRenderer();
        var cairo = new google.maps.LatLng(30.02, 31.21);
        var myOptions = {
            zoom:7,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            center: cairo
        }

        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        directionsDisplay.setMap(map);      
    }
    
    $( ".calculate" ).click(function(e) {        
        e.preventDefault();        

        var start = document.getElementById("start").value;
        var end = document.getElementById("end").value;
        var distanceInput = document.getElementById("distance");

        var request = {
            origin:start, 
            destination:end,
            travelMode: google.maps.DirectionsTravelMode.DRIVING
        };

        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                    var distance = response.routes[0].legs[0].distance.value / 1000 ;
                    $('#distance').html(distance);
                    
                    var numAnim = new countUp("distance", 0, distance , 2, 1.5);
                    numAnim.start(); 
                    
                    $('#distance_input').val(distance);
                            
                    var carType = $('#car_type option:selected').attr('car-type');
                    var carModel = $('#car_type option:selected').val();
                    $('#car_model_input').val(carModel);
                    
                    var dataString = 'car_type='+carType+'&distance='+ response.routes[0].legs[0].distance.value / 1000;
                    
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('transfer_order/calculate'); ?>",
                        data: dataString,
                        cache: false,
                        success: function(price){
                            $('#price').html( price );
                            
                            var numAnim = new countUp("price", 0, price , 2, 1.5);
                            numAnim.start();     
                            
                            $('#price_input').val(price);                            
                        }
                    }); 
        
            }
        });
        initialize();
                                
        $('.staff-3').show('slow');
        
 

  


        $('#next_transfer').show('slow');
        $('#map').css('z-index','5');
        $('#show-map-btn').show();
        
        
    });
    $( "#close-map" ).click(function(e) { 
        $('#map').css('z-index','-5');
    });
    $( "#show-map-btn" ).click(function(e) { 
        e.preventDefault();        
        $('#map').css('z-index','5');
    });    
    $( "#next_transfer" ).click(function(e) { 
        $('#map').css('z-index','-5');        
        $('#transfer-service-step1').hide('slow');
        $('#transfer-service-step2').show('slow');        
    }); 
    $( "#back_transfer" ).click(function(e) { 
        $('#transfer-service-step1').show('slow');
        $('#transfer-service-step2').hide('slow');        
    });     
    </script>    

</html>