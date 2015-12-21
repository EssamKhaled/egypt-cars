<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}
?>
<?php echo form_open($this->uri->uri_string(),array('class' => 'contact-form')); ?>
    <h3 class="block-head">
        Forgot your password ?
        <br><span style="font-size: 12px;">Reset your password here.</span>
    </h3>
    <div class="form-input">
        <label><?php echo form_label($login_label, $login['id']); ?></label>
        <?php echo form_input($login); ?>
        <label style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?> </label>
    </div>

<?php echo form_submit('submit', 'Get a new password', "class='btn btn-large main-bg'"); ?>
<?php echo form_close(); ?>