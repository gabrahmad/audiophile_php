<html lang="en">
<?php 

$categories = [
  ["name" => "headphones", "img" => "img/headphonesCategory.png"],
  ["name" => "speakers", "img" => "img/speakersCategory.png"],
  ["name" => "earphones", "img" => "img/earphonesCategory.png"]
]

?>

<?php 
include ("components/header.php")
?>

<!--start of main product -->
  <div class="  hero is-halfheight section " id="mainHero">
    <div class=" has-text-white">
      <h4 class="is-uppercase is-size-4-desktop is-size-6 ">new product</h4>
      <h1 class="is-uppercase title has-text-white is-size-1-desktop is-size-3 py-1">XX99 Mark II</br> Headphones</h1>
      <p class="is-smaller">Experience natural, lifelike audio and exceptional</br> build quality made for the passionate music</br> enthusiast.</p>
      <a class="button is-uppercase mt-5 has-text-white has-text-weight-bold p-4" style="background-color: orange;">see product</a>
    </div>

  </div>
  <!--end of main product -->

  
  <!-- start of categories --> 
  <div class="section columns is-8 is-variable is-uppercase has-text-centered m-4">
      <?php 
        foreach ($categories as $category) {
          echo "
          <div class=\"column py-6 mb-6\">
          <div class=\"card  has-background-light py-2\">
            <div class=\"card-image category_image\">
              <figure class=\"image \">
                <img src={$category['img']} alt={$category['name']}>
              </figure>
            </div>

            <div class=\"  mb-6\">
              <h6>{$category['name']}</h6>
              <a href=\"#\">shop</a>

            </div>
          </div>
        </div>
          ";
        }
      ?>

  </div>
  <!-- end of categories --> 




<?php
  include ("components/footer.php");
?>
  

</html>