<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>



  <body <?php body_class(); ?>>
    <div id="parallax-container">
      <div class="parallax-image container-fluid" style="background: #0c0c0c;"></div>
      <div class="parallax-image container-fluid" style="background: url(<?php echo get_template_directory_uri(); ?>./images/parallax-layer-3.png);"></div>
      <div class="parallax-image container-fluid" style="background: url(<?php echo get_template_directory_uri(); ?>./images/parallax-layer-2.png);"></div>
      <div class="parallax-image container-fluid" style="background: url(<?php echo get_template_directory_uri(); ?>./images/parallax-layer-1.png);"></div>

      <div class="header">

        <a class="logo" href="index.php" title="Villains Kitchen"><img src="<?php echo get_template_directory_uri(); ?>./images/vk-logo.png" width="51" height="39" alt="Villain's Kitchen"/></a>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
          | MENU |
        </label>

        <ul class="menu">
          <li id="closeMenu"><label for="chk" class="hide-menu-btn" style="font-family: 'Open Sans', sans-serif; font-weight: 300;">
            Close <i class="fas fa-times text-white"></i>
          </label></li>
          <li><a href="#our-work">Work</a></li>
          <li><a href="<?php echo site_url(); ?>/about-us">About</a></li>
          <li><a href="<?php echo site_url(); ?>/about-us#services">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div id="home" class="container">
        <div class="hero-text">
          <h1 style="font-size: 60px; line-height: normal;"><span style="font-size: 34px; font-family: 'NorwesterRegular';">WE CREATE</span><br>
          INTUITIVE &<br />
          IMMERSIVE<br />
          EXPERIENCES<br /></h1>
          <p id="intro">Villains Kitchen is an independent design & development consultancy based in Los Angeles. Our focus has always been the work, the people who create it, and the people we create it for.</p>
          <p id="intro">We are a friendly bunch. Why don't you step inside?</p>
        </div>
        <div class="featured-container">
          <div class="featured-label font-weight-bold font-italic">featured...</div>
          <div class="featured"><img src="<?php echo get_template_directory_uri(); ?>./images/featured-1.jpg" /></div>
          <div class="featured"><img src="<?php echo get_template_directory_uri(); ?>./images/featured-2.jpg" /></div>
          <div class="featured"><img src="<?php echo get_template_directory_uri(); ?>./images/featured-3.jpg" /></div>
        </div>
        <div class="row" style="">
          <div class="col-md-12"><a class="button" href="#our-work" style="font-family: 'AGaramondPro-BoldItalic';"><img src="<?php echo get_template_directory_uri(); ?>./images/btn-white.png"></a></div>
        </div>
      </div>
    </div>


    <div id="our-work" class="container-fluid m-0 p-0" >
      <div class="container">
        <div class="col-lg-6 col-md-8 mx-auto title pt-4">
          <h2 style="font-size: 85px;">Our Work</h2>
          <div class="separator"></div>
          <p id="intro">Villains Kitchen is led by strategy, influenced by design, and inspired by technology.</p>
        </div>
        <div class="col-md-10 mx-auto works pb-4">
          <div class="row">

            <?php $custom_query = new WP_Query( 
              array( 'post_type' => 'portfolio',
                     'posts_per_page' => '-1', 
                     'order_by'=> 'post_id',
                     'order' => 'ASC' ));

            while($custom_query->have_posts()) : $custom_query->the_post(); ?>

        

            <div class="thumb-box col-md-6">
              <a class="showModal" href="#myModal-<?php the_ID(); ?>" data-toggle="modal">
    
              <?php the_post_thumbnail() ?>
              <div class="overlay">
                <div class="plus"><img src="<?php echo get_template_directory_uri(); ?>./images/pluscontrol.png"></div>
              </div>
            </a>
            </div>



            <?php endwhile; ?>

           
          </div>
        </div>
      </div>
    </div>



          
<?php get_template_part('modal'); ?>

<?php get_footer(); ?>



