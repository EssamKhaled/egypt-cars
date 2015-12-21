<?php
$full_name = array(
    'name' => 'full_name',
    'required' => 'required',
);
$email = array(
    'name' => 'email',
    'type' => 'email',
    'required' => 'required',    
);
$message = array(
    'name' => 'message',
    'required' => 'required',    
);
?>

<?php if($this->session->flashdata('msg')) : ?>
    <div class="box success-box fx animated fadeInRight" data-animate="fadeInRight">
        <a class="close-box" href="#"><i class="fa fa-times"></i></a>
        <h3>Message Successfully Sent</h3>
        <p><?php echo $this->session->flashdata('msg'); ?></p>
    </div>
<?php endif; ?>


<?php echo form_open(site_url('special_request/process'), array('class' => 'contact-form')); ?>

    <h3 class="block-head">
        Have something special to ask? 
        <br><span style="font-size: 12px;">You can send a special request to our sales team here.</span>
    </h3>

    <div class="form-input">
        <label>Full name</label>
        <?php echo form_input($full_name); ?>
    </div>
    <div class="form-input">
        <label>Email Address</label>
        <?php echo form_input($email); ?>
    </div>
    <div class="form-input">
        <label>Your Message</label>
        <?php echo form_textarea($message); ?>
    </div>

<?php echo form_submit('submit', 'Send', "class='btn btn-large main-bg'"); ?>
<?php echo form_close(); ?>