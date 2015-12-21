<?php if($this->session->flashdata('msg')) : ?>
    <div class="box success-box fx animated fadeInRight" data-animate="fadeInRight">
        <a class="close-box" href="#"><i class="fa fa-times"></i></a>
        <h3>Message Successfully Sent</h3>
        <p><?php echo $this->session->flashdata('msg'); ?></p>
    </div>
<?php endif; ?>
<form action="<?php echo site_url('contact_us/process'); ?>" method="POST" >
    <div class="contact-form fx" data-animate="fadeInLeft" id="contact">
        <h3 class="block-head">Get in Touch</h3>
        <form class="form-signin cform" method="post" action="php/contact.php" id="cform" autocomplete="on">
            <mark id="message" style="display: none;"></mark>
            <div class="form-input">
                <label>First name<span class="red">*</span></label>
                <input type="text" required="required" name="full_name">
            </div>
            <div class="form-input">
                <label>Email<span class="red">*</span></label>
                <input name="email" type="email" required="required">
            </div>
            <div class="form-input">
                <label>Phone</label>
                <input name="phone" type="text">			    						
            </div>
            <div class="form-input">
                <label>Message<span class="red">*</span></label>
                <textarea required="required" name="message" cols="40" rows="7"></textarea>
            </div>
            <div class="form-input">
                <input type="submit" class="btn btn-large main-bg" value="Submit">&nbsp;&nbsp;<input type="reset" class="btn btn-large" value="Reset" id="reset">
            </div>
        </form>
    </div>
</form>

<div class="padding-vertical">
    <?php foreach($addreses as $address) : ?>    
        <div class="cell-5 fx animated fadeInRight" data-animate="fadeInRight">
            <h4 class="main-color bold">Office: <?php echo $address->office_name; ?></h4>
            <h5>Address:</h5>
            <p><?php echo $address->address; ?></p>
            <h5>Email:</h5>
            <p><?php echo $address->email; ?>
            </p>
            <h5>Phone:</h5>
            <p><?php echo $address->phone; ?></p>
            <h5>FAX:</h5>
            <p><?php echo $address->fax; ?></p>
        </div>
    <?php endforeach; ?>
</div>