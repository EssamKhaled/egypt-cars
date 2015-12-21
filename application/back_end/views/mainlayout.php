<?php
$CI =& get_instance();
$CI->load->library('session');
if($CI->session->userdata('user_id') != 1){
    redirect(site_url('../index.php'));
}
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
        <link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css')?>">
        <?php foreach($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/ie.css')?>">
        <script type="text/javascript" src="<?php echo base_url('assets/js/html5.js')?>"></script>
    <![endif]-->


        <!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
        <link rel="stylesheet" id="skinCSS" href="<?php echo base_url('assets/css/skins/default.css')?>">

    </head>
    <body class='admin-bg'>

        <div class="pageWrapper">
            <!-- Header Start -->
            <div id="headWrapper" class="clearfix">

   

                <header class="top-head">
                    <div class="container">
                        <div class="row">
                            <div class="logo cell-3">
                                <a href="<?php echo base_url('admin.php')?>"></a>
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
                        <div class="cell-3">
                            <div class="widget-content" style='background-color:#ccc;'>
                                <ul class="list list-crosshairs alt">
                                    <li><a href="<?php  echo site_url('')?>">Home</a><span></span></li>                                                                        
                                    <li><a href="<?php  echo site_url('../index.php')?>">Front End</a><span></span></li>                                    
                                    <li>
                                        <a>Orders</a><span></span>
                                        <ul style="padding-left:20px;">
                                            <li style="padding-bottom:0px;"><a href="<?php  echo site_url('manage/transfer_order')?>">Transfer Order</a><span></span></li>
                                            <li style="padding-bottom:0px;"><a href="<?php  echo site_url('manage/transfer_order')?>">Hourly Order</a><span></span></li>                                            
                                        </ul>
                                    </li>                                    
                                    <li><a href="<?php  echo site_url('manage/services')?>">Our Services</a><span></span></li>
                                    <li>
                                        <a>Our Fleet</a><span></span>
                                        <ul style="padding-left:20px;">
                                            <li style="padding-bottom:0px;"><a href="<?php  echo site_url('manage/car_type')?>">Car Type</a><span></span></li>
                                            <li style="padding-bottom:0px;"><a href="<?php  echo site_url('manage/our_fleet')?>">Fleet Setting</a><span></span></li>                                            
                                        </ul>
                                    </li>
                                    <li><a href="<?php  echo site_url('manage/top_cities')?>">Top Cities</a><span></span></li>
                                    <li><a href="<?php  echo site_url('manage/special_request')?>">Special Request</a><span></span></li>
                                    <li><a href="<?php  echo site_url('manage/about_us')?>">About Us</a><span></span></li>
                                    <li>
                                        <a>Contact Us</a><span></span>
                                        <ul style="padding-left:20px;">
                                            <li style="padding-bottom:0px;"><a href="<?php  echo site_url('manage/inbox')?>">Inbox (0)</a><span></span></li>
                                            <li style="padding-bottom:0px;"><a href="<?php  echo site_url('manage/contact_us')?>">Address</a><span></span></li>                                            
                                        </ul>                                        
                                    </li>
                                    <li><a href="<?php  echo site_url('manage/terms_condition')?>">Terms and Conditions</a><span></span></li>
                                    <li><a href="<?php  echo site_url('manage/faq')?>">FAQ</a><span></span></li>
                                    <li><a href="<?php  echo site_url('manage/newsletter')?>">Newsletter</a><span></span></li>                                    
                                    <li><a href="<?php  echo site_url('manage/blog')?>">Our Blog</a><span></span></li>
                                    <li><a href="<?php  echo site_url('manage/our_fleet')?>">Settings</a><span></span></li> 
                                    <li><a href="<?php  echo site_url('../index.php/auth/logout')?>">Logout</a><span></span></li>                                                                        
                                </ul>
                            </div>                                                 
                        </div>
                        <div class="cell-9">
                            <?php echo $output; ?>                           
                        </div>                            
                    </div>
                </div>
            </div>
        <!-- Content End -->


        <!-- Back to top Link -->
        <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

    </div>
    <?php foreach($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <!-- Load JS siles -->
    <script type="text/javascript">
        $( "#fixed_input_box" ).click(function(e) { 
            if($('input[name=fixed]:checked').val() == 0){
                if($('#field-kilometer').val() != '' && $('#field-kilometer_price').val() != '' && $('#field-total_price').val() == '')
                var total_price = parseFloat($('#field-kilometer').val())  * parseFloat($('#field-kilometer_price').val()) ;
                $('#field-total_price').val(total_price)
            }
        });
    </script>

</body>
</html>