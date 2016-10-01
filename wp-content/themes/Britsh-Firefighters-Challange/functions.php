<?php

/* Style the admin */
add_action('wp_print_styles', 'my_deregister_styles', 100);

function my_deregister_styles() {
  wp_deregister_style('pmpro_frontend');
  wp_deregister_style('pmprorh_frontend');
}


function my_custom_login() {
echo '<style>

.login #backtoblog a, .login #nav a, .login #nav a:hover, .login #nav a:active, .login #nav a:focus, .login #nav a:visited {
    text-decoration: none;
    color: #fff;
}

 html body.login, html  {
 background:linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5)), url("'. get_stylesheet_directory_uri() .'/images/british firefighter challenge.jpg");
 background-size:cover;
 background-position:center;
 background-repeat:no-repeat;
 }
 .login h1 a {
 	background-image: none,url('. get_stylesheet_directory_uri() .'/images/logo.png);
 	    width: 100%;
    background-size: 88%;
    background-position: center 79%;
    background-color: rgba(255,255,255,0.95);
    height: 60px;
    margin: 0 auto -20px;
    border: 0;
}
 	    
 }
 .wp-core-ui .button-primary {
 text-shadow:none !important;
 }
 #loginform {
    background: rgba(255,255,255,0.95);
     border:0;
     box-shadow:none !important;
         padding-top: 10px;

}
.login #login_error, .login .message {
    background: #ed1c24;
    color: #FFF;
    margin-top: 18px;
    margin-bottom: -20px;
}
.login label {
	    color: #000;
	    text-align: left;
}
.button.button-large {
	background: #ED1C24 !important;
	border: #ED1C24 !important;
	color: #fff !important;
	text-shadow:none !important;
}
.login_error
  </style>';
}
add_action('login_head', 'my_custom_login');

add_filter( 'login_redirect', create_function( '$url,$query,$user', 'return home_url();' ), 10, 3 );

?>