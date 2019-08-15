 

<?php $custom_query = new WP_Query( 
              array( 'post_type' => 'portfolio',
                     'posts_per_page' => '8', 
                     'order_by'=> 'post_id',
                     'order' => 'ASC' ));

            while($custom_query->have_posts()) : $custom_query->the_post(); ?>


<!-- Modal1 -->
            

      <div class="modal fade" id="myModal-<?php the_ID(); ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-body text-center">
          <div class="text-right">
          <a data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri(); ?>./images/xbutton.png"></a>
            
             
          
            <div class="row">

            <div id="modal-control-left" class="col-2 pl-5 pt-5 text-right">
              <?php $next_post = get_adjacent_post(false,'',false);?>
              <?php $previous_post = get_adjacent_post(false,'',true);?> 
              <?php if($previous_post->ID != ''): ?>
              <a href="#myModal-<?php echo $previous_post->ID; ?>" data-toggle="modal" >
            <button type="button" class="prev-post btn btn-default btn-prev d-inline-block"><i class="fas fa-chevron-left fa-3x"></i></button>
              </a>
              <?php endif; ?>
            </div>

            <div id="modal-title" class="col-6 mx-auto text-center">
            <h1><?php echo the_title(); ?></h1>
            <div class="separator"></div>
            <small class="text-center d-block" style="font-family: 'Open Sans', sans-serif; font-weight:700;">
              <?php
              echo get_field("client");
              ?></small>
            </div>



            <div id="modal-control-right" class="col-2 pr-5 pt-5 text-left">
              <?php $next_post = get_adjacent_post(false,'',false);?>
              <?php $previous_post = get_adjacent_post(false,'',true);?> 
              <?php if($next_post->ID != ''): ?>
              <a href="#myModal-<?php echo $next_post->ID; ?>" data-toggle="modal" >
              <button type="button" class="next-post btn btn-default btn-next"><i class="fas fa-chevron-right fa-3x"></i></button>
              </a>
              <?php endif; ?>
            </div>
            </div>
          </div>
          <!-- img and contents -->
          <div id="img-handler" class="container-fluid text-center pt-4">
              <?php echo the_content(); ?>
          </div>
          <!-- img and contents end-->
          <div class="modal-footer border border-0 d-flex justify-content-center">
            <button type="button" class="btn btn-default btn-prev"><i class="fas fa-chevron-left"></i></button>
            <a data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri(); ?>./images/xbutton.png"></a>
            <button type="button"  class="btn btn-default btn-next"><i class="fas fa-chevron-right"></i></button>
          </div>
        </div>

      </div>
    </div>

<!-- Modal1 End -->

<?php endwhile; ?>








 