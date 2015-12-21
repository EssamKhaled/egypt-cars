<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php echo form_open($this->uri->uri_string(),array('class' => 'contact-form')); ?>
    <h3 class="block-head">
        New user ?
        <br><span style="font-size: 12px;">Create your new account here.</span>
    </h3>
    <?php if ($use_username) { ?>
    <div class="form-input">
        <label><?php echo form_label('Username', $username['id']); ?></label>
        <?php echo form_input($username); ?>
        <label style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?> </label>
    </div>
    <?php } ?>
    <div class="form-input">
        <label><?php echo form_label('Email Address', $email['id']); ?> </label>
        <?php echo form_input($email); ?>
        <label style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?> </label>
    </div>
    <div class="form-input">
        <label><?php echo form_label('Password', $password['id']); ?> </label>
        <?php echo form_password($password); ?>
        <label style="color: red;"><?php echo form_error($password['name']); ?> </label>
    </div>
    <div class="form-input">
        <label><?php echo form_label('Confirm Password', $confirm_password['id']); ?> </label>
        <?php echo form_password($confirm_password); ?>
        <label style="color: red;"><?php echo form_error($confirm_password['name']); ?> </label>
    </div>

<?php echo form_submit('submit', 'Create Account', "class='btn btn-large main-bg'"); ?>
<?php echo form_close(); ?>