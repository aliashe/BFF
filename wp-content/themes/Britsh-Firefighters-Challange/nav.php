 <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="">
          <a href="http://www.britishfirefighterchallenge.co.uk/" class="navbar-brand">BRITISH&nbsp;<span class="label label-danger">FIREFIGHTER</span>&nbsp;CHALLENGE</a>
<?php global $current_user; 
get_currentuserinfo(); 
if ( user_can( $current_user, "subscriber" ) ){ ?>
 <a href="<?php echo wp_logout_url(); ?>" class="btn btn-link navbar-btn navbar-right hidden-xs">LOG OUT</a>
          <a href="http://www.britishfirefighterchallenge.co.uk/account/" class="hidden-sm btn btn-danger navbar-btn navbar-right hidden-xs">MY ACCOUNT</a>
          <p class="navbar-text navbar-right hidden-xs">Signed in as
            <a href="http://www.britishfirefighterchallenge.co.uk/profile/" class="navbar-link"><?php global $current_user;
echo '' . $current_user->display_name . '';
?></a>
          </p>
	<?php } else { ?>
          <a href="http://www.britishfirefighterchallenge.co.uk/login/?redirect_to=https%3A%2F%2Fwww.britishfirefighterchallenge.co.uk%2Fhow-to-enter%2F%3Flevel%3D1" class="btn btn-danger navbar-btn navbar-right hidden-xs">REGISTER</a>
          <?php } ?>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse"></div>
      </div>
    </div>