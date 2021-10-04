<?php get_header(); ?>
<?php  if(is_page('news')) 
 require_once( get_template_directory() . '/template/template-pages-banner.php');
?>
<?php

$news = new WP_Query(
    array(
              'post_type' => 'news', // name used when you register your cpt example "register_post_type( 'faqs', $args )" use "faqs". There are many options that you can add on the query - just read them
    ));
?>
<?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post() ?>    
<section class="news">
      <div class="container">
        <div class="section-description">
          <p>
            "Discover what San Pablo City Medical Society is up to next with our
            latest news updates, press releases, events, and more."
          </p>
        </div>
        <div class="grid-col-3 card">
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
        </div>
        <div class="pagination">
          <a href="#">Prev</a>
          <a href="#">Next</a>
        </div>
      </div>
    </section>
    <?php endwhile;
            else :
                echo "no more posts";
            endif;
            ?>
             <?php  if(is_page('news')) 
 require_once( get_template_directory() . '/template/template-talk.php');
?>
 <?php  if(is_page('news')) 
 require_once( get_template_directory() . '/template/template-member.php');
?>
<?php get_footer(); ?>