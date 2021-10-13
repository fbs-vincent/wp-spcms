<?php get_header(); ?>
<?php  if(is_page('gallery')) 
 require_once( get_template_directory() . '/template/template-pages-banner.php');
?>
<?php

$queryGalleries = new WP_Query(
    array(
              'post_type' => 'galleries', 
              'posts_per_page' => 3,
              'paged' =>  ( get_query_var('paged') ? get_query_var('paged') : 1)
    ));
?>
  
<section class="news">
      <div class="container">
        <div class="section-description">
          <p>
            "Discover what San Pablo City Medical Society is up to next with our
            latest news updates, press releases, events, and more."
          </p>
        </div>
        <div class="grid-col-3 card">
        <?php if($queryGalleries->have_posts()) : while($queryGalleries->have_posts()) : $queryGalleries->the_post() ?>  
          <div class="card__item">
          
            <div class="card__item__content">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <ul class="metadata">
          
                <li class="date"><?php echo get_the_date('M d Y'); ?> /</li>
                <li class="author"><?php the_author(); ?></li>
              </ul>
				      <?php the_content(); ?>
            </div>
          </div>
          <?php endwhile;
            else :
                echo "no more posts";
            endif;
            ?>
        </div>
        <div class="pagination t-center">
    <?php
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                        'format' => '?paged=%#%',
                        'prev_text' => __('Prev'),
                        'next_text' => __('Next '),
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $queryGalleries->max_num_pages
                        ));
                   ?>
            </div>
      </div>
    </section>
   
<?php  
 require_once( get_template_directory() . '/template/template-talk.php');
 require_once( get_template_directory() . '/template/template-member.php');
?>

<?php get_footer(); ?>