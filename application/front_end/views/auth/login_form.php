<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php echo form_open($this->uri->uri_string(),array('class' => 'contact-form')); ?>

    <h3 class="block-head">
        Already Registered 
        <br><span style="font-size: 12px;">Use your account details to login.</span>
    </h3>

    <div class="form-input">
        <label><?php echo form_label($login_label, $login['id']); ?> </label>
        <?php echo form_input($login); ?>
        <label style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?> </label>
    </div>
    <div class="form-input">
        <label><?php echo form_label('Password', $password['id']); ?></label>
        <?php echo form_password($password); ?>
        <label style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?> </label>        
    </div>
    <div class="form-input">
        <div class="form-box">
            <?php echo form_checkbox($remember); ?>
            <span>Remember me</span>            
        </div>      
    </div>
    <div class="form-input">
        <div class="form-box">
            <?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?> | 
            <?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?>          
        </div>      
    </div>
<?php echo form_submit('submit', 'Login', "class='btn btn-large main-bg'"); ?>
<?php echo form_close(); ?>