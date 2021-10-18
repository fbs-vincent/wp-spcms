<?php get_header(); ?>
<?php require_once( get_template_directory() . '/template/template-pages-banner.php');?>

<section class="council">
    <div class="container">
        <div class="council__executive">
          
            <?php $queryDirectories = new WP_Query( array(
                     'post_type' => 'directories',
                     'posts_per_page' => 10, 
                     'paged' =>  ( get_query_var('paged') ? get_query_var('paged') : 1)
                ));
?>
                 
                 
            <ul>
            <?php if($queryDirectories->have_posts()) : while($queryDirectories->have_posts()) : $queryDirectories->the_post() ?> 
                <li class="grid-col-2 grid-col-2--council">
                    <h4><?php the_title(); ?></h4>
                    <span><?php the_terms($post->ID , 'doctor_type'); ?></span>
                </li>
                <?php endwhile;
            else :
                echo "no more posts";
            endif;
            ?>
            </ul>
            
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
                        'total' => $queryDirectories->max_num_pages
                        ));
                   ?>
            </div>
    </div>
</section>
<?php get_footer(); ?>