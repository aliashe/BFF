<?php
/*
Plugin Name: User Emails
Description: Changes the default user emails
Version: 1.0
Author: Ali Ashe
Author URI: MyWebsiteDesign.net
*/

/**
 * redefine new user notification function
 *
 * emails new users their login info
 *
 * @author  Joe Sexton <joe@webtipblog.com>
 * @param   integer $user_id user id
 * @param   string $plaintext_pass optional password
 */
if ( !function_exists( 'wp_new_user_notification' ) ) {
    function wp_new_user_notification( $user_id, $plaintext_pass = '' ) {
 
        // set content type to html
        add_filter( 'wp_mail_content_type', 'wpmail_content_type' );
 
        // user
        $user = new WP_User( $user_id );
        $userEmail = stripslashes( $user->user_email );
        $siteUrl = get_site_url();
        $logoUrl = plugin_dir_url( __FILE__ ).'/sitelogo.gif';
 
        $subject = "". $user->first_name . ", Registration Is Now Open For The ". get_bloginfo( 'name' ) . "!";
        $headers = "From: British Firefighter Challenge <registration@britishfirefighterchallenge.co.uk>";
 

        // admin email
        $message  = "<p>Dear Admin,</p><p>Great news! ". $user->first_name ." ". $user->last_name ."'s registration has just been imported Artists' Union England.</p><p>The user has had their site details emailed to them, and they have been told to contact registration@britishfirefighterchallenge.co.uk in case of any problems.</p><p>". $user->first_name ."'s online account account is now active. They simply need to login and pay. For reference, their username is below:</p><p>Username: ". $user->display_name ." (". $user->user_email .").</p><p>They have been given these details, a password, and a login link. They have also been alerted to change their password upon logging in</p>";
        @wp_mail( get_option( 'admin_email' ), "Imported Participant - ". $user->first_name ." ". $user->last_name ."", $message, $headers );
 
        ob_start();
        include plugin_dir_path( __FILE__ ).'/email_welcome.php';
        $message = ob_get_contents();
        ob_end_clean();
 
        @wp_mail( $userEmail, $subject, $message, $headers );
 
        // remove html content type
        remove_filter ( 'wp_mail_content_type', 'wpmail_content_type' );
    }
}
 
/**
 * wpmail_content_type
 * allow html emails
 *
 * @author Joe Sexton <joe@webtipblog.com>
 * @return string
 */
function wpmail_content_type() {
 
    return 'text/html';
}
?>