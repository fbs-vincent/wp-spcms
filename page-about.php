<?php get_header(); ?>
<?php  if(is_page('about')) 
 require_once( get_template_directory() . '/template/template-pages-banner.php');
?>
<section class="about-intro">
      <div class="container">
        <div class="about-intro__wrapper">
        <div class=" section-title">
            <h2>
              <span>Who We Are</span> san pablo city <br />
              medical society
            </h2>
        </div>
            <p>
            The Philippine Medical Association recorded the existence of SAN PABLO CITY MEDICAL ASSOCIATION officially on January
8, 1947. It was on September 30, 1966 that the association was applied for a corporate status. Four months later, on January 10, 1967,
with the approval of the incorporation under the corporate name “SAN PABLO CITY MEDICAL SOCIETY, INC” by the Securities and
Exchange Commission, the SPCMS attained a legal personality.
            </p>
             <div class="about-intro__wrapper__img">
            <img src="https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/10/about-intro-img.jpg" alt="" />
          </div>
            <p>
            Before 1947, the physicians of SPC were associated with other medical groups, being members of the Laguna Medical
Association based in Sta. Cruz Laguna and that Manila Medical Society. With a deep sense of unity and camaraderie, the leading
medical practitioners of that time organized the San Pablo City Medical Association with twenty-three charter members; it was headed
by Dr. Cirilio Cauyan as Charter president and Dr. Archimedes Brion as Secretary.
            </p>
            <p>
            Within its 66 years of existence (1947-2013). Thirty-nine past presidents have served the society, having their own merits and
achievements. To note, the 17 th president, Dr. Petronio P. Alava received a lot of donation as the future site of the medical society
building and also became the first elected PMA District Governor of Southern Tagalog Region. Its 24 th president, Dr.Melecio V. Marilim
was amongst the founding members of the SOUTHERN TAGALOG ASSOCIATION OF MEDICAL PRESIDENTS (STAMP) which
eventually was change to Sth. Tagalog Association of Medical PRACTITIONERS in 2004 under the term of Dr. Emmanuel D. Loyola
(33 rd President). The Philippine Medical Association (PMA) recognizes the San Pablo City Medical Society as one of the oldest existing
local Medical Association in the country.
            </p>
            <a
              href="https://spcms.frontlinebusiness.com.ph/directory/"
              class="btn btn--secondary"
              >Members Directory</a
            >
         
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