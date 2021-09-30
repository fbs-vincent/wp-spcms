<?php get_header(); ?>
<?php  if(is_page('about')) 
 require_once( get_template_directory() . '/template/template-pages-banner.php');
?>
<section class="about-intro">
      <div class="container">
        <div class="grid-col-2 about-intro__wrapper">
          <div class="about-intro__wrapper__img">
            <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/09/about-intro-img.jpg" alt="" />
          </div>
          <div class="about-intro__wrapper__content section-title">
            <h2>
              <span>Who We Are</span> san pablo city <br />
              medical society
            </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
              mollis sit amet odio eu gravida. Suspendisse potenti. Phasellus
              ullamcorper iaculis porta. Praesent vulputate urna sem, feugiat
              semper est rhoncus sed. Fusce hendrerit justo nec turpis commodo
              faucibus. Sed tempus convallis suscipit. Sed a sapien at velit
              vestibulum suscipit. Etiam fringilla viverra ante. Aenean
              tincidunt tristique efficitur.
            </p>
            <p>
              Suspendisse a accumsan metus, eget varius lorem. Fusce efficitur
              magna nec ultrices tempor. Sed scelerisque placerat odio vel
              scelerisque. Curabitur vitae tempor elit.
            </p>
            <a
              href="https://demo.frontlinebusiness.com.ph/dev/spcms/dist/directory.html"
              class="btn btn--secondary"
              >Members Directory</a
            >
          </div>
        </div>
      </div>
    </section>
    <section class="about-mission">
      <div class="container">
        <div class="grid-col-2 about-mission__wrapper">
          <div class="about-mission__wrapper__content section-title">
            <div class="about-mission__wrapper__content__wrapper">
              <h2><span>Our</span>MISSION</h2>
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
                Suspendisse a accumsan metus, eget varius lorem. Fusce efficitur
                magna nec ultrices tempor. Sed scelerisque placerat odio vel
                scelerisque. Curabitur vitae tempor elit.
              </p>
            </div>
          </div>
          <div class="about-mission__wrapper__img">
            <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/09/our-mission-img.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="about-vision">
      <div class="container">
        <div class="grid-col-2 about-vision__wrapper">
          <div class="about-vision__wrapper__img">
            <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/09/our-vision-img.jpg" alt="" />
          </div>
          <div class="about-vision__wrapper__content section-title">
            <div class="about-vision__wrapper__content__wrapper">
              <h2><span>Our</span>VISION</h2>
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
                Suspendisse a accumsan metus, eget varius lorem. Fusce efficitur
                magna nec ultrices tempor. Sed scelerisque placerat odio vel
                scelerisque. Curabitur vitae tempor elit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php  if(is_page('about')) 
 require_once( get_template_directory() . '/template/template-member.php');
?>
<?php  if(is_page('about')) 
 require_once( get_template_directory() . '/template/template-talk.php');
?>
<?php get_footer(); ?>