 <?php 
if (is_page( 12 )) {
header("Location: https://www.britishfirefighterchallenge.co.uk/how-to-enter/?level=1");
die();
}?>
<?php if (is_page( 7 )) {
header("Location: https://www.britishfirefighterchallenge.co.uk/account/");
die();
} ?>
<?php 

get_template_part( 'header' );
get_template_part( 'nav' );
get_template_part( 'cover' );
get_template_part( 'footer' );

?>