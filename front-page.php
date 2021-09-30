<?php get_header(); ?>
<section class="banner-slider">
      <div class="container">
        <div id="splides">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <div class="grid-col-2 banner-slider__wrapper">
                  <div class="banner-slider__wrapper__content section-title">
                    <h2>This is a post</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Quam earum velit cum quo neque labore perspiciatis dolore
                      aut laboriosam optio minus, eligendi aspernatur ad
                      accusantium ipsum eveniet dignissimos veritatis
                      blanditiis?
                    </p>
                    <a
                      href="https://demo.frontlinebusiness.com.ph/dev/spcms/dist/single.html"
                      class="btn btn--secondary"
                      >Read More</a
                    >
                  </div>
                  <div class="banner-slider__wrapper__img">
                    <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/09/banner-img-1.jpg" alt="" />
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="grid-col-2 banner-slider__wrapper">
                  <div class="banner-slider__wrapper__content section-title">
                    <h2>This is a post</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Quam earum velit cum quo neque labore perspiciatis dolore
                      aut laboriosam optio minus, eligendi aspernatur ad
                      accusantium ipsum eveniet dignissimos veritatis
                      blanditiis?
                    </p>
                    <a
                      href="https://demo.frontlinebusiness.com.ph/dev/spcms/dist/single.html"
                      class="btn btn--secondary"
                      >Read More</a
                    >
                  </div>
                  <div class="banner-slider__wrapper__img">
                    <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/09/banner-img-1.jpg" alt="" />
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="grid-col-2 banner-slider__wrapper">
                  <div class="banner-slider__wrapper__content section-title">
                    <h2>This is a post</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Quam earum velit cum quo neque labore perspiciatis dolore
                      aut laboriosam optio minus, eligendi aspernatur ad
                      accusantium ipsum eveniet dignissimos veritatis
                      blanditiis?
                    </p>
                    <a
                      href="https://demo.frontlinebusiness.com.ph/dev/spcms/dist/single.html"
                      class="btn btn--secondary"
                      >Read More</a
                    >
                  </div>
                  <div class="banner-slider__wrapper__img">
                    <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/09/banner-img-1.jpg" alt="" />
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="container">
        <div class="grid-col-2 about__wrapper">
          <div class="about__wrapper__img">
            <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/09/about-img.jpg" alt="aboutimg" />
          </div>
          <div class="about__wrapper__content section-title">
            <h2>
              <span>About</span>SAN PABLO CITY<br />
              MEDICAL SOCIETY
            </h2>
            <div class="grid-col-2">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas mollis sit amet odio eu gravida. Suspendisse potenti.
                Phasellus ullamcorper iaculis porta. Praesent vulputate urna
                sem, feugiat semper est rhoncus sed. Fusce hendrerit justo nec
                turpis commodo faucibus. Sed tempus convallis suscipit. Sed a
                sapien at velit vestibulum suscipit. Etiam fringilla viverra
                ante. Aenean tincidunt tristique efficitur.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas mollis sit amet odio eu gravida. Suspendisse potenti.
                Phasellus ullamcorper iaculis porta. Praesent vulputate urna
                sem, feugiat semper est rhoncus sed. Fusce hendrerit justo nec
                turpis commodo faucibus. Sed tempus convallis suscipit. Sed a
                sapien at velit vestibulum suscipit. Etiam fringilla viverra
                ante. Aenean tincidunt tristique efficitur.
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
        <?php 
              $paged =(get_query_var('paged')) ? get_query_var('paged') : 1;
              $latest = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'meta_key' => 'Group',
                'meta_value' => 'Latest',
                'paged' => $paged
              ))
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
                <li class="author"><?php the_author(); ?></li>
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
        <div class="pagination">
        <?php
              echo paginate_links(array(
                'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                'total' => $latest->max_num_pages,
                'current' => max(1, get_query_var('paged')),
                'prev_next' => true,
                'prev_text' => sprintf('Prev'),
                'next_text' => sprintf('Next'),
              ))
            ?>
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