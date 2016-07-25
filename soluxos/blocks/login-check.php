<?php
/**
 * @package WordPress
 * @subpackage soluxos
 */ 
?>

<?php if (is_user_logged_in()) : ?>

    <?php
        $chosen_users = get_field('permitted_users');
        $default_users = array('administrator','editor');
        $permitted_users = array_merge((array)$chosen_users, (array)$default_users);
        $current_user_level = get_user_role();
        if (in_array($current_user_level, $permitted_users)) : ?>
    
        <?php the_content(); ?>

    <?php else : ?>
   
        <p class="error">Your user-level does not allow you to access this content.</p>
        
   <?php endif; ?>

<?php else : ?>

		<p>Please login</p>
        <?php $args = array(
				'echo'           => true,
				'redirect'       => site_url( $_SERVER['REQUEST_URI'] ), 
				'form_id'        => 'loginform',
				'label_username' => __( 'Username' ),
				'label_password' => __( 'Password' ),
				'label_remember' => __( 'Remember Me' ),
				'label_log_in'   => __( 'Log In' ),
				'id_username'    => 'user_login',
				'id_password'    => 'user_pass',
				'id_remember'    => 'rememberme',
				'id_submit'      => 'wp-submit',
				'remember'       => true,
				'value_username' => NULL,
				'value_remember' => false
		); ?> 
		<?php wp_login_form( $args ); ?> 
    
<?php endif; ?> 