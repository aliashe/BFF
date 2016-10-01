<?php get_template_part( 'header' );?>
  <?php get_template_part( 'nav' );?>
<?php global $current_user; get_currentuserinfo(); ?>
    <div class="cover">
      <div class="cover-image" style="background-image : linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5)), url('//aliashe.github.io/ks/BFF/british%20firefighter%20challenge.jpg')"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <br>
            <h1 class="text-danger">
             
<?php if ( user_can( $current_user, "subscriber" ) ){ 
echo '<br><a href="/how-to-enter/" class="register label label-white"> Hello ' . $current_user->first_name . '';
} else { ?>
 <a href="/how-to-enter/" class="register label label-white">REGISTER NOW <?php } ?>
</a>
            </h1>
            <br>
            <p class="text-inverse">
<?php if ( user_can( $current_user, "subscriber" ) ){ ?>
Welcome to the Britsh Firefighter Challenge online
<?php } else { ?>
A competition organized by Firefighters, for Firefighters, in the Midlands. <?php } ?>
</p>
            <br>
            <div class="row">
              <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
                <div class="col-sm-4 col-xs-12 hidden-xs text-inverse">
                  <div class="col-xs-12">
                    <i class="mega-octicon fa-5x octicon-organization"></i>
                  </div>
                  <div class="col-xs-12 text-inverse">
                    <h4>
<?php if ( user_can( $current_user, "subscriber" ) ){ ?>
<a class="text-inverse" href="http://www.britishfirefighterchallenge.co.uk/profile/">My Profile</a>
<?php } else { ?>
100 Firefighters<?php } ?>                 
                    </h4>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-inverse">
                  <div class="col-xs-12">
                    <span class="fa-4x fa-stack text-inverse">
                      <i class="fa fa-calendar-o fa-stack-2x "></i>
                      <strong class="fa-stack-1x calendar-text ">
                        <span style="margin-top:3px; display:block; font-size:70%;">29</span>
                      </strong>
                      <strong class="fa-stack-1x calendar-text">
                        <span style="margin-top:33px; display:block; font-size:40%;">July 17</span>
                      </strong>
                    </span>
                     <h4>
<?php if ( user_can( $current_user, "subscriber" ) ){ ?>
Save The Date!
<?php } else { ?>
<?php } ?>
</h4>    
                  </div>
                </div>
                <div class="col-sm-4 col-xs-12 hidden-xs text-inverse">
                  <div class="col-xs-12">
                    <i class="fa fa-5x fa-fw fa-globe"></i>
                  </div>
                  <div class="col-xs-12 text-inverse">
                    <h4>
<?php if ( user_can( $current_user, "subscriber" ) ){ ?>
<a class="text-inverse" href="/how-to-enter/">Register Online</a>
<?php } else { ?>
International Competition<?php } ?>
</h4>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>
            <a href="http://www.britishfirefighterchallenge.co.uk/login/?redirect_to=https%3A%2F%2Fwww.britishfirefighterchallenge.co.uk%2Fhow-to-enter%2F%3Flevel%3D1" class="btn btn-danger btn-lg">
<?php if ( user_can( $current_user, "subscriber" ) ){ ?>
REGISTER NOW</a><a href="http://www.britishfirefighterchallenge.co.uk/profile/" class="col-xs-12 text-right text-inverse"><br/>Got to your profile &rarr;</a>
<?php } else { ?>
SECURE YOUR PLACE</a>
<?php } ?>



            <br>&nbsp;
            <br>&nbsp;
            <br>&nbsp;</div>
        </div>
      </div>
    </div>
  
<?php get_template_part( 'footer' );