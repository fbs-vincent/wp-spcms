<section class="section-banner" style="background-image:URL(https://spcms.frontlinebusiness.com.ph/wp-content/uploads/2021/09/banner-about.jpg) !important">

<?php
$catObj = get_category_by_slug('category-slug'); 
$catName = $catObj->name;
echo $catName;

echo "<h1>$catName</h1>";
?>
  
</section>