<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post() ?>
<section class="section-banner section-banner--about">
      <h1><?php the_title(); ?></h1>
    </section>
<section class="single">
      <div class="container">
        <div class="single__wrapper grid-col-3 grid-col-3--single">
          <div class="single__wrapper__metadata">
           
            <ul>
              <li>Posted</li>
              <li><?php echo get_the_date('M d Y'); ?></li>
            </ul>
          </div>
          <div class="single__wrapper__body">
            <div class="single__wrapper__body__header">
              <ul class="post-categories">
                <li>
                  <a href="<?php the_permalink(); ?>"><?php the_category(); ?></a>
                </li>
              </ul>
              <div class="section-title">
                <h2><?php the_title(); ?></h2>
              </div>
            </div>
            <div class="single__wrapper__body__content">
            <?php if(has_post_thumbnail()) {
                  the_post_thumbnail();
              }
              ?>
            <?php the_content(); ?>
            </div>
          </div>
          <div class="single__wrapper__share">
            <!-- <a href="#">Share</a> -->
          </div>
        </div>
      </div>
    </section>
    <?php endwhile;
    else :
        echo "no more post";
    endif;
    ?>
     <?php  if(is_single()) 
 require_once( get_template_directory() . '/template/template-talk.php');
?>
<?php get_footer(); ?>