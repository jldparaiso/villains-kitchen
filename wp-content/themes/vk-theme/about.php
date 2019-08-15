<?php
/** Template Name: About Us
 * The template for displaying About pages.

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


<body style="background-color: #fff;">
    
    <div class="header" style="background-color: #fff;">

        <a class="logo" href="<?php echo site_url(); ?>/home" title="Villains Kitchen"><img src="<?php echo get_template_directory_uri(); ?>./images/vk-logo.png" width="51" height="39" alt="Villain's Kitchen" style="filter:invert(100%);" /></a>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn" style="color:black;">
          | MENU |
        </label>

        <ul class="menu">
          <li id="closeMenu"><label for="chk" class="hide-menu-btn" style="font-family: 'Open Sans', sans-serif; font-weight: 300;">
            Close <i class="fas fa-times text-white"></i>
          </label></li>
          <li><a href="<?php echo site_url(); ?>/home#our-work">Work</a></li>
          <li><a href="<?php echo site_url(); ?>/about-us">About</a></li>
          <li><a href="<?php echo site_url(); ?>/about-us#services">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

    <div id="about" class="container-fluid m-0">
    <div id="about-cont1" class="container mt-5 border border-0 py-0">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 mt-5">
          <h1 style="font-family: 'NorwesterRegular'; font-size: 85px; line-height: 1; font-weight: bold; color: #000;">WHO WE ARE</h1>
        </div>
        <div class="col-lg-2 col-md-1"></div>
        <div class="col-lg-7 col-md-7 col-sm-12 mt-5">
          <p class="sub-cont lead" style="font-family: 'Open Sans', sans-serif; font-size: 45px; font-weight:300; color: #333333; text-align: left; line-height: 54px;">VillainsKitchen is an independently owned creative agency founded in 2015 and currently located in Los Angeles. </p>

          <p style="font-family: 'Open Sans', sans-serif; font-size: 18px; color: #333333; line-height: 25px;">A multi-disciplined set of Creatives and Technologists who create ideas for our clients. Our work often blends mixtures of ideas and craft wrapped around extremely engaging stories that deliver results. We are the stewards of a new way of thinking. A diverse team who share an obsession with consumer understanding, the power of ideas and its craft.</p>

          <p style="font-family: 'Open Sans', sans-serif; font-size: 18px; color: #333333; line-height: 25px;">We are fans of everything we touch build lasting relationship with our clients, and the happiest when we're immersed in creating great work with incredible partners.
          </p>
          
        </div>
      </div>
    </div>   
    </div>
    
      

    <div id="abt-img" class="container-fluid text-center px-0" style="background-color: transparent; position: relative; top: 400px; overflow: hidden;">
      		<img id="about-img" class="img-fluid" src="<?php echo get_template_directory_uri(); ?>./images/about-img1.png">
      	</div>

      <div id="services" class="container-fluid p-0" style="background:#000;  position: relative; top: 400px;">
      <div id="about-contents" class="container pb-5" >
        <div class="services-head col-lg-3 col-md-6 col-sm-6 pt-5 text-white">
          <h1 style="font-family: 'NorwesterRegular'; font-size: 85px; line-height: 1; font-weight: bold;">WHAT WE DO</h1>
        </div>
        <div class="row px-3">
          <div class="services-head col-lg-4 col-md-8 col-sm-12 pt-5 px-3">
            <p class="lead" style="font-family: 'Open Sans', sans-serif; font-size: 35px; color: #ff0000;">Design</p>
            <p class="text-white" style="font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight:300; text-align: left; line-height: 24px;">The heart and soul of our offering. We put a lot of passion and effort to deliver outstanding projects which will please your eyes.</p>
            <ul class="services-bullets text-white pl-3"  style="font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight:300;">
              <li>Website Design</li>
              <li>Mobile Design</li>
              <li>User Experience/Interface (UX + UI)</li>
              <li>Identity & Branding</li>
              <li>Social Content</li>
              <li>Posters & Illustrations</li>
              <li>Packaging</li>
              <li>Keyart</li>
              <li>Video Production & Editing</li>
              <li>Motion Graphics & Animation</li>
            </ul>
            
          </div>
          <div class="services-head col-lg-4 col-md-8 col-sm-12 pt-5 px-3">
            <p class="lead" style="font-family: 'Open Sans', sans-serif; font-size: 35px; color: #ff0000;">Technology</p>
            <p class="text-white" style="font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight:300; text-align: left; line-height: 24px;">Our technology team represents a wide array of backgrounds and is dedicated to unlocking the creative freedom of our UX and Design teams. Our server-side development team is well versed in a variety of commercial and open-source platforms and evaluates and selects the best tool to meet current and future needs.</p>
            <ul class="services-bullets text-white pl-3"  style="font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 300;">
              <li>Web & Mobile Development</li>
              <li>Systems Integration</li>
              <li>eCommerce</li>
              <li>Search Engine Optimization</li>
              <li>Solution Architecture</li>
              <li>Posters & Illustrations</li>
              <li>Prototyping</li>
              <li>Application Development</li>
            </ul>
            
          </div>
          <div class="services-head col-lg-4 col-md-8 col-sm-12 pt-5 px-3">
            <p class="lead" style="font-family: 'Open Sans', sans-serif; font-size: 35px; color: #ff0000;">Strategy</p>
            <p class="text-white" style="font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight:300; text-align: left; line-height: 24px;">Every effort begins with an assessment of the challenge to ensure that the agency and key stakeholders are aligned with regards to objectives and definitions of program success. 
            </p>
            <ul class="services-bullets text-white pl-3"  style="font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 300;">
              <li>Customer Experience Strategy</li>
              <li>Digital Transformation</li>
              <li>Brand Strategy</li>
              <li>e-Commerce</li>
              <li>Digital Identity</li>
              <li>Technical Strategy</li>
            </ul>
            
          </div>
        </div>

        <div class="services-head col-4 mt-5 pt-5 text-white">
          <h1 style="font-family: 'NorwesterRegular'; font-size: 85px; line-height: 1; font-weight: bold;">BRANDS & CLIENTS</h1>
        </div>
        
        <div id="brand-handle" class="d-flex flex-wrap align-items-baseline container-fluid p-0 ml-2 my-5 text-center">
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/amazon.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/riot-games.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/ubisoft.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/activision.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/land-rover.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/rei.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/nike.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/universal.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/namco.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/capcom.png"></div>
            <div class="px-3 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/cbsfilms.png"></div>
            <div class="px-3 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/ea.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/ticketmaster.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/screen-gems.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/sony.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/dream-works.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/disney.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/mattel.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/hasbro.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/levis.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/sephora.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/discovery.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/aria.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/nbc.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/ross.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/jordan.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/mgm.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/volvo.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/saban.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/allsaints.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/renaissance.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/adidas.png"></div>
            <div class="px-2 text-center"><img class="brands" src="<?php echo get_template_directory_uri(); ?>./images/ceasar.png"></div>
        </div>
        
      </div>
   
</div>



    <div class="footer py-5 mt-0" style="background:#000; position: relative; top: 400px;">
      <div class="row">
        <div class="col-md-12 py-5">
          <img src="<?php echo get_template_directory_uri(); ?>./images/vk-logo.png" width="22" alt="Villains Kitchen" />
          <p class="copyright">&copy; 2019 Villains Kitchen LLC. All rights reserved.</p>
        </div>
      </div>
    </div>
  </body>

