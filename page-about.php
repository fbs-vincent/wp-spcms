<?php get_header(); ?>
<?php  if(is_page('about')) 
 require_once( get_template_directory() . '/template/template-pages-banner.php');
?>
<section class="about-intro">
      <div class="container">
        <div class="grid-col-2 about-intro__wrapper">
          <div class="about-intro__wrapper__img">
            <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/10/about-intro-img.jpg" alt="" />
          </div>
          <div class="about-intro__wrapper__content section-title">
            <h2>
              <span>Who We Are</span> san pablo city <br />
              medical society
            </h2>
            <p>
            Imploring the aid and guidance of the Almighty, we, the members of the medical profession of
San Pablo City, Philippines, conscious of our duties and responsibilities to God, to our country
and our countrymen, as well as to our Hippocratic Oath, do hereby promulgate this
Constitution as a declaration of our profession and firm determination to protect and defend
our rights in a manner consistent with the nobility of our calling.
            </p>
            <a
              href="https://spcms.frontlinebusiness.com.ph/directory/"
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
              The SPCMS, a component Medical Society of the Philippine Medical Association established as a
non-stock, non-profit, professional organization is dedicated to the following objectives:
              </p>
             <ol>
               <li>To bring together and unite the entire PRC registered medical professionals of San Pablo City
and its neighboring towns.</li>
               <li>To extend medical knowledge and advance medical science.</li>
               <li>To elevate the standards of medical education and practice.</li>
               <li>To ensure the enactment of just medical laws.</li>
               <li>To promote fraternal relations among physicians and between physicians and allied
professionals. </li>
               <li>To protect the legitimate rights and prerogatives of the physicians.</li>
               <li>To serve as an authoritative source of information regarding health, disease and medical
practice; and </li>
               <li>To promote the practice of medicine in the context of Philippine life and culture.</li>
             </ol>
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
              Our vision of the SPCMS is to have a fellowship of physicians united in the common goal of
acquiring the highest levels of medical knowledge and skills through continuing education and
research, and to promote the healing ministrations of the physician in the delivery of health
care of patients.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php  if(is_page('about')) 
 require_once( get_template_directory() . '/template/template-talk.php');
?>
    <?php  if(is_page('about')) 
 require_once( get_template_directory() . '/template/template-member.php');
?>

<?php get_footer(); ?>