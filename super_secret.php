<?php
/*
Plugin Name: Super Secret
Plugin URI: http://blog.aizatto.com/super-secret/
Description: Tries its best to keep your blog super secret. Makes your blog private, with no traces of people knowing a blog exists. A <a href="http://en.wikipedia.org/wiki/HTTP_404">404 Not Found</a> is returned instead of redirecting to a login screen.
Author: Ezwan Aizat Bin Abdullah Faiz
Author URI: http://aizatto.com
Version: 0.1
License: LGPLv2
*/

function super_secret() {
	global $current_user;

	if ($current_user->ID == 0 && basename($_SERVER['PHP_SELF']) != 'wp-login.php') {
			header("HTTP/1.0 404 Not Found"); ?>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"> 
<HTML><HEAD> 
<TITLE>404 Not Found</TITLE> 
</HEAD><BODY> 
<H1>Not Found</H1> 
The requested URL was not found on this server.
<HR> 
<?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1'): ?>
	The WordPress Plugin Super Secret stopped you. You need to login to access your <a href="<?php echo wp_login_url(); ?>">installation.</a>
<?php endif; ?>
</BODY></HTML> 
<?php
			die;
	}
}

add_action('set_current_user', 'super_secret');
