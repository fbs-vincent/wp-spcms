<?php get_header(); ?>
<?php require_once( get_template_directory() . '/template/template-pages-banner.php');?>
<section class="council">
    <div class="container">
        <div class="council__executive">
            <h2>SPCMS EXECUTIVE COUNCIL 2021-2022</h2>
        <?php $queryCouncil = new WP_Query( array(
                     'post_type' => 'councils',
                     'posts_per_page' => -1, 
                     'meta_key' => 'member_type',
                     'meta_value' => 'Council',
                ));
                ?>
                 
                 
            <ul>
            <?php if($queryCouncil->have_posts()) : while($queryCouncil->have_posts()) : $queryCouncil->the_post() ?> 
                <li class="grid-col-2 grid-col-2--council">
                    <h4><?php the_title(); ?></h4>
                    <span><?php the_terms($post->ID , 'role_type'); ?></span>
                </li>
                <?php endwhile;
            else :
                echo "no more posts";
            endif;
            ?>
            </ul>
            
        </div>
        <div class="council__committee">
            <h2>COMMITTEE CHAIRMAN</h2>
        <?php $queryCouncil = new WP_Query( array(
                     'post_type' => 'councils',
                     'posts_per_page' => -1, 
                     'meta_key' => 'member_type',
                     'meta_value' => 'Committee',
                ));
                ?>
                 
            <ul>
            <?php if($queryCouncil->have_posts()) : while($queryCouncil->have_posts()) : $queryCouncil->the_post() ?> 
                <li class="grid-col-2 grid-col-2--council">
                    <h4><?php the_title(); ?></h4>
                    <span><?php the_terms($post->ID , 'role_type'); ?></span>
                </li>
                <?php endwhile;
            else :
                echo "no more posts";
            endif;
            ?>
            </ul>
          
        </div>
    </div>
</section>
<?php get_footer(); ?>