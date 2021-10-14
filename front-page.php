<?php get_header(); ?>
<section class="banner-slider" style="background-image: linear-gradient(
      to left,
      rgba(216, 156, 53, 0.85),
      rgba(0, 102, 0, 0.85)
    ),url(<?php echo get_field('home_banner')['url'] ?>) !important">
      <div class="container">
        <div id="splides">
          <div class="splide__track">
            <ul class="splide__list">
             <?php
             $args = array('post_type' => 'banner');
             $slider = new WP_Query($args);
             ?>
             <?php if($slider->have_posts()) : while($slider->have_posts()) : $slider->the_post() ?>
             
              <li class="splide__slide">
                <div class="grid-col-2 banner-slider__wrapper">
                  <div class="banner-slider__wrapper__content section-title">
                    <h2><?php the_title(); ?></h2>
                    <p>
                    <?php echo wp_trim_words(get_the_content(), 20); ?>
                    </p>
                    <a
                      href="<?php the_permalink(); ?>"
                      class="btn btn--secondary"
                      >Read More</a
                    >
                  </div>
                  <div class="banner-slider__wrapper__img">
                  <?php if(has_post_thumbnail()) {
                  the_post_thumbnail();
              }
              ?>
                  </div>
                </div>
              </li>
              <?php endwhile;
            else :
                echo "no more posts";
            endif;
            ?>
          
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="container">
        <div class="grid-col-2 about__wrapper">
          <div class="about__wrapper__img">
            <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/10/about-img.jpg" alt="aboutimg" />
          </div>
          <div class="about__wrapper__content section-title">
            <h2>
              <span>About</span>SAN PABLO CITY<br />
              MEDICAL SOCIETY
            </h2>
            <div class="grid-col-2">
              <p>
              The Philippine Medical Association recorded the existence of SAN PABLO CITY MEDICAL ASSOCIATION officially on January
8, 1947. It was on September 30, 1966 that the association was applied for a corporate status. Four months later, on January 10, 1967,
with the approval of the incorporation under the corporate name “SAN PABLO CITY MEDICAL SOCIETY, INC” by the Securities and
Exchange Commission, the SPCMS attained a legal personality.
              </p>
              <p>
              Before 1947, the physicians of SPC were associated with other medical groups, being members of the Laguna Medical
Association based in Sta. Cruz Laguna and that Manila Medical Society. With a deep sense of unity and camaraderie, the leading
medical practitioners of that time organized the San Pablo City Medical Association with twenty-three charter members; it was headed
by Dr. Cirilio Cauyan as Charter president and Dr. Archimedes Brion as Secretary.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="latest">
      <div class="container">
        <div class="section-title">
          <h2><span>Latest</span>NEWS AND EVENTS</h2>
        </div>
        
        <div class="grid-col-3 card">
      

<?php $latest = new WP_Query( array(
                     'post_type' => 'news',
                     'posts_per_page' => 3, // it will show 3 items only
                    //  'meta_key' => 'Group',
                    //  'meta_value' => 'Latest',
                    //  'paged' =>  ( get_query_var('paged') ? get_query_var('paged') : 1)
                ));
                ?>

              <?php if($latest->have_posts()) : while($latest->have_posts()) : $latest->the_post() ?>
          <div class="card__item">
            <div class="card__item__img">
            <?php if(has_post_thumbnail()) {
                  the_post_thumbnail();
              }
              ?>
              <div class="card__item__img__category">
                <span><?php the_category(); ?></span>
              </div>
            </div>
            <div class="card__item__content">
              <ul class="metadata">
                <li class="category"><?php the_category(); ?></li>
                <li class="date">/ <?php echo get_the_date('M d Y'); ?> /</li>
                
              </ul>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p>
              <?php echo wp_trim_words(get_the_content(), 10) ?>
              </p>
              <a
                href="<?php the_permalink(); ?>"
                ><span>
                  <svg
                    aria-hidden="true"
                    focusable="false"
                    data-prefix="fas"
                    data-icon="chevron-circle-right"
                    class="svg-inline--fa fa-chevron-circle-right fa-w-16"
                    role="img"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path
                      fill="currentColor"
                      d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"
                    ></path>
                  </svg>
                </span>
                Find out more</a
              >
            </div>
          </div>
          <?php endwhile;
            else :
                echo "no more posts";
            endif;
            ?>
          
        </div>
        <div class="view-all">
        <a href="https://spcms.frontlinebusiness.com.ph/news/">View All</a>
        </div>
       

      </div>
    </section>
    <?php  if(is_front_page()) 
 require_once( get_template_directory() . '/template/template-talk.php');
?>
<?php  if(is_front_page()) 
 require_once( get_template_directory() . '/template/template-partners.php');
?>
<?php get_footer(); ?>