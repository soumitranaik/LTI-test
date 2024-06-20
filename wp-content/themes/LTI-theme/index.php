<?php 
$main_heading = get_field('main_heading');
$big_text = get_field('big_text');
$subheading = get_field('subheading');
$main_heading2 = get_field('main_heading_2');
$big_text2 = get_field('big_text_2');
$subheading2 = get_field('subheading_2');
$main_heading3 = get_field('main_heading_3');
$big_text3 = get_field('big_text_3');
$subheading3 = get_field('subheading_3');

$about_heading = get_field('about_heading');
$about_heading_big = get_field('about_heading_big');
$about_subheading = get_field('about_subheading');
$about_text = get_field('about_text');

$offering_1 = get_field('offering_1');
$offering_2 = get_field('offering_2');
$offering_3 = get_field('offering_3');
$offering_4 = get_field('offering_4');
$offering_5 = get_field('offering_5');
$offering_6 = get_field('offering_6');

$offering_image_1 = get_field('offering_image_1');
$offering_image_2 = get_field('offering_image_2');
$offering_image_3 = get_field('offering_image_3');
$offering_image_4 = get_field('offering_image_4');
$offering_image_5 = get_field('offering_image_5');
$offering_image_6 = get_field('offering_image_6');

$Accelerator_1 = get_field('Accelerator_1');
$Accelerator_2 = get_field('Accelerator_2');
$Accelerator_3 = get_field('Accelerator_3');
$Accelerator_4 = get_field('Accelerator_4');
$Accelerator_5 = get_field('Accelerator_5');

$Accelerator_image_1 = get_field('Accelerator_image_1');
$Accelerator_image_2 = get_field('Accelerator_image_2');
$Accelerator_image_3 = get_field('Accelerator_image_3');
$Accelerator_image_4 = get_field('Accelerator_image_4');
$Accelerator_image_5 = get_field('Accelerator_image_5');

$Accelerator_Text_1 = get_field('Accelerator_Text_1');
$Accelerator_Text_2 = get_field('Accelerator_Text_2');
$Accelerator_Text_3 = get_field('Accelerator_Text_3');
$Accelerator_Text_4 = get_field('Accelerator_Text_4');
$Accelerator_Text_5 = get_field('Accelerator_Text_5');

get_header(); 

?>
<div class="slider">

    <input type="radio" name="slider" title="slide1" checked="checked" class="slider-btn" />
    <input type="radio" name="slider" title="slide2" class="slider-btn" />
    <input type="radio" name="slider" title="slide3" class="slider-btn" />


    <div class="slider-inner">
      <div class="slider-contents slide-1"><i class="slider-icon fa fa-desktop fa-3x"></i>
        <h2 class="slider-caption"><?php echo esc_html($main_heading); ?> <span class="slider-big"><?php echo esc_html($big_text); ?></span></h2>
        <ul class="slider-text">
          <li><?php echo esc_html($subheading); ?></li>

        </ul>
        <button class="slider-button">BOOK A CONSULTATION > </button>
      </div>
      <div class="slider-contents slide-2"><i class="slider-icon fa fa-code fa-3x"></i>
        <h2 class="slider-caption"><?php echo esc_html($main_heading2); ?> <span class="slider-big"><?php echo esc_html($big_text2); ?></span></h2>
        <ul class="slider-text">
          <li><?php echo esc_html($subheading2); ?></li>

        </ul>
        <button class="slider-button">READ MORE > </button>
      </div>
      <div class="slider-contents slide-3"><i class="slider-icon fa fa-rocket fa-3x"></i>
        <h2 class="slider-caption"><?php echo esc_html($main_heading3); ?> <span class="slider-big"><?php echo esc_html($big_text3); ?></span></h2>
        <ul class="slider-text">
          <li class="slider-light"><?php echo esc_html($subheading3); ?></li>

        </ul>
        <button class="slider-button">BOOK CASE STUDY > </button>
      </div>

    </div>

  </div>
  <section class="container about" id="about">
    <div class="about-box">
      <div class="column column1 about-heading">
        <h2 class="heading-light"><?php echo esc_html($about_heading); ?> <br><span class="heading-bold"><?php echo esc_html($about_heading_big); ?></span></h2>
        <span class="subheading"><?php echo esc_html($about_subheading); ?></span>
      </div>
      <div class="column column2">
        <p><?php echo esc_html($about_text); ?></p>
        <a href="/">Read More</a>
      </div>
    </div>
    <div class="offerings">
      <h2 class="offerings-heading">Here's a glimpse of our upgrade offerings</h2>
      <div class="offerings-box">
        
        <div class="column">
          <div class="icon"><img src="<?php echo esc_html($offering_image_1); ?>" alt=""></div>
          <h3><?php echo esc_html($offering_1); ?></h3>
        </div>
        <div class="column">
          <div class="icon"><img src="<?php echo esc_html($offering_image_2); ?>" alt=""></div>
          <h3><?php echo esc_html($offering_2); ?></h3>
        </div>
        <div class="column">
          <div class="icon"><img src="<?php echo esc_html($offering_image_3); ?>" alt=""></div>
          <h3><?php echo esc_html($offering_3); ?></h3>
        </div>
      </div>

      <div class="offerings-box">
        <div class="column">
          <div class="icon"><img src="<?php echo esc_html($offering_image_4); ?>" alt=""></div>
          <h3><?php echo esc_html($offering_4); ?></h3>
        </div>
        <div class="column">
          <div class="icon"><img src="<?php echo esc_html($offering_image_5); ?>" alt=""></div>
          <h3><?php echo esc_html($offering_5); ?></h3>
        </div>
        <div class="column">
          <div class="icon"><img src="<?php echo esc_html($offering_image_6); ?>" alt=""></div>
          <h3><?php echo esc_html($offering_6); ?></h3>
        </div>
      </div>
    </div>
  </section>
  <section class="container red" id="upgrade">
    <div class="about-box">
      <div class="column column1 about-heading">
        <h2 class="heading-light">Up your ante with a Temenos <br><span class="heading-bold">T24 Upgrade</span></h2>
        <p>Keeping Temenos up to date is key for digital transformation of any banking enterprise. You need a partner
          with both deep domain expertise and experience in serving enterprises your size. Syncordis has been
          exclusively implementing Temenos core banking solutions for close to two decades. We are dedicated to succeed,
          with you in the center. In fact, our deep domain understanding in automating banking products and processes
          makes us poised to upgrade you to T24 faster, and more cost effectively, than eve</p>
      </div>
      <div class="column column2">

      </div>
    </div>
    <div class="carousel-container">
      <h3 class="carousel-heading">Our accelerators</h3>
      <div class="carousel">
       
        <div class="carousel-item">
          
            <img src="<?php echo esc_html($Accelerator_image_1); ?>" alt="Image 1">
            <div class="carousel-text">
              <h4><?php echo esc_html($Accelerator_1); ?></h4>
              <p><?php echo esc_html($Accelerator_Text_1); ?></p>
            </div>
  
          
        </div>
        <div class="carousel-item">
          
            <img src="<?php echo esc_html($Accelerator_image_2); ?>" alt="Image 1">
            <div class="carousel-text">
              <h4><?php echo esc_html($Accelerator_2); ?></h4>
              <p><?php echo esc_html($Accelerator_Text_2); ?></p>
            </div>
  
          
        </div>
        <div class="carousel-item">
          
            <img src="<?php echo esc_html($Accelerator_image_3); ?>" alt="Image 1">
            <div class="carousel-text">
              <h4><?php echo esc_html($Accelerator_3); ?></h4>
              <p><?php echo esc_html($Accelerator_Text_3); ?></p>
            </div>
  
         
        </div>
        <div class="carousel-item">
         
            <img src="<?php echo esc_html($Accelerator_image_4); ?>" alt="Image 1">
            <div class="carousel-text">
              <h4><?php echo esc_html($Accelerator_4); ?></h4>
              <p><?php echo esc_html($Accelerator_Text_4); ?></p>
            </div>
  
          
        </div>
        <div class="carousel-item">
          
          <img src="<?php echo esc_html($Accelerator_image_5); ?>" alt="Image 1">
          <div class="carousel-text">
            <h4><?php echo esc_html($Accelerator_5); ?></h4>
            <p><?php echo esc_html($Accelerator_Text_5); ?></p>
          </div>

        
      </div>
      </div>
      <button class="carousel-button" id="nextBtn">&#8594</button>
    </div>
  </section>
<?php get_footer(); ?>
