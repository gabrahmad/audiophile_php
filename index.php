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