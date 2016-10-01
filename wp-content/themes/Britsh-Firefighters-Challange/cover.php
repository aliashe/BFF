 <div class="cover">
      <div class="background-image-fixed cover-image" style="background-image : url('//aliashe.github.io/ks/BFF/british%20firefighter%20challenge.jpg')"></div>

      </div>
    </div>
    <div class="modal" id="myModal" aria-hidden="false" style="display: block;">
    <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <br>
            <br>
            <?php if (is_page( '9' )) { } else { echo '<br>&nbsp;<br>&nbsp;<br>'; }; ?>
            <h1 class="text-danger">
              <span class="label label-white"><?php the_title(); ?></span>
            </h1>
            <br>
            <p class="text-inverse"><?php echo get_post_meta( get_the_ID(), 'Subtitle', true ); ?></p>
             <?php if (is_page( '9' )) { echo '<p class="text-inverse small">&nbsp;</p>'; } else {  }; ?>
            <br class="hidden-md hidden-lg" />
          </div>
        </div>
      </div>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
          <?php if (is_page( '9' )) { } else { echo '<div class="col-xs-12">'; }; ?>
          <br>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
  <?php if (is_page('9')) { } else {echo '</div>'; }; ?>
 <div class="clearfix"></div>

          </div>
        
        </div>
         <br>&nbsp;
          <br>&nbsp;
      </div>
    </div>
    <div class="modal-backdrop fade in"></div>
   