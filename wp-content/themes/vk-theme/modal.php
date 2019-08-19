

<?php $custom_query = new WP_Query( 
              array( 'post_type' => 'portfolio',
                     'posts_per_page' => '8', 
                     'order_by'=> 'post_id',
                     'order' => 'ASC' ));

            while($custom_query->have_posts()) : $custom_query->the_post(); ?>

                  <?php 
                      $next_post = get_next_post();
                      $next_post_id = $next_post->ID;
                  ?>


                  <?php 
                      $previous_post = get_previous_post();
                      $previous_post_id = $previous_post->ID;
                  ?> 

                  



<!-- Modal -->
<div class="modal fade border-0" id="myModal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl border-0" role="document">
    <div class="modal-content">
      <div class="modal-header border-0 text-right">
         <a id="closeBtn"  onclick="close_modal()" class="close"><img src="<?php echo get_template_directory_uri(); ?>./images/xbutton.png"></a>
      </div>
      <div class="modal-body">
        
        <div class="row">

            <div id="modal-control-left" class="col-2 pl-5 pt-5 text-right">
          
              <?php if($previous_post_id != ''): ?>
              <a class="nav" href="#myModal-<?php echo $previous_post_id ?>">
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
           
              <?php if($next_post_id != ''): ?>
              <a class="nav"  href="#myModal-<?php echo $next_post_id ?>">
              <button type="button" class="next-post btn btn-default btn-next"><i class="fas fa-chevron-right fa-3x"></i></button>
              </a>
              <?php endif; ?>

            </div>
            
        </div>

          <div id="img-handler" class="container-fluid text-center pt-4">
              <?php echo the_content(); ?>
          </div>
      </div>
      <div class="modal-footer border border-0 d-flex justify-content-center">
          <?php if($previous_post_id != ''): ?>
              <a class="nav" href="#myModal-<?php echo $previous_post_id ?>">
                <button type="button" class="btn btn-default btn-prev"><i class="fas fa-chevron-left"></i></button>
              </a>
              <?php endif; ?>

            <a id="closeBtn" data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri(); ?>./images/xbutton.png"></a>

            <?php if($next_post_id != ''): ?>
              <a class="nav" href="#myModal-<?php echo $next_post_id ?>">
                <button type="button"  class="btn btn-default btn-next"><i class="fas fa-chevron-right"></i></button>
               </a>
              <?php endif; ?>
          </div>
    </div>
  </div>
</div>



<?php endwhile; ?>

<script type="text/javascript">
  jQuery(document).ready(function( $ ) {
      jQuery(".nav").click(function(){
        jQuery(".modal.fade.border-0").each(function(){
          jQuery(this).removeClass("show");
          jQuery(this).hide();
        });
        jQuery(jQuery(this).attr('href')).addClass("show");
        jQuery(jQuery(this).attr('href')).show();
        console.log(jQuery(this).attr('href') + "added Modal Open");
      });  
  });

  
  function close_modal()
  {
    $('.modal').attr('data-dismiss','modal');
    $('.modal').modal('hide'); 
	$('.modal-backdrop').remove();
  }


  // jQuery(document).ready(function($){
  // 	jQuery("#closeBtn").click(function(){
  // 		jQuery("#closeBtn").attr('data-dismiss','modal');
  // 	});
  // });

  
</script>







 