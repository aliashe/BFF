<html><head>
    <meta charset="utf-8">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.gif" type="image/gif">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   	<link href="https://aliashe.github.io/ks/wp-content/themes/asthecrowflys/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
         <?php if (is_page( 9 )) { wp_head(); ?>
 <script>
 ( function($) {
 $(window).load(function(){
     jQuery('input#name_first').on("input", function() { 
   jQuery("#username").val( this.value.toLowerCase() + jQuery('input#name_last').val().toLowerCase() ); 
   }); 
   
   jQuery('input#name_last').on("input", function() { 
   jQuery("input#username").val( jQuery('input#name_first').val().toLowerCase() + this.value.toLowerCase() ); 
   jQuery("#password").val(Math.random().toString(36).slice(-10)); 
   jQuery("#password2").val(jQuery('#password').val()); 
   jQuery("#email_pass").val(jQuery('#password').val()); 
   }); 
   
   jQuery('#email').on("input", function() { jQuery("#bemail").val(this.value); jQuery("#bconfirmemail").val(this.value); });
   
   $("#biog_div textarea").addClass("unedited");
   
    $("#biog_div textarea").on("focus", function(){
        $("#biog_div textarea.unedited").val("");
        $(this).removeClass("unedited");
    });
    
});
})(jQuery);
</script>
<?php } ?>
<?php if (is_page( 39 )) { wp_head();} ?>
  </head><body class="<?php echo $post->post_name; ?> page modal-open">