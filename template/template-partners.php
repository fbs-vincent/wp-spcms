<section class="partners">
      <div class="container">
        <div class="section-title">
          <h2><span>Our</span>Partners</h2>
        </div>
       
        
          <?php if(have_posts()) : while(have_posts()) : the_post() ?>
       
         

         
          <?php the_content(); ?>
         
            <!-- <li>
              <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/09/who.png" alt="" />
            </li>

            <li>
              <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/09/doh.png" alt="" />
            </li>

            <li>
              <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/09/prc.png" alt="" />
            </li>

            <li>
              <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/09/phil.png" alt="" />
            </li>

            <li>
              <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/09/pafp.png" alt="" />
            </li> -->
           
            <?php endwhile;
    else :
        echo "no more post";
    endif;
    ?>
        
      
       
      </div>
    </section>