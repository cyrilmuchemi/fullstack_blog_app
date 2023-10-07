<?php
include '../app/pages/includes/header.php';
?>
  <main id="main" class="container mt-3">
    <div class="image-container d-flex flex-column p-2">
        <img src="<?=ROOT?>/assets/images/cyber-girl.png" class="img-fluid rounded" alt="hero image" />
        <div class="bg-light p-4 rounded-top rounded-bottom d-flex align-self-start flex-column  hero-profile-box">
            <article>
            <button type="button" class="btn btn-primary btn-sm">Technology</button>
            </article>
            <article class="py-2">
            <h3 class="profile-text">The Impact of Technology on<br/> the Workplace: How<br/> Technology is Changing</h3>
            </article>
            <div class="d-flex">
              <img src="<?=ROOT?>/assets/images/Lydia-Matson.jpg" class="rounded-circle profile-pic" alt="profile picture"/>
              <span class="profile-description"><p>Lydia Matson</p></span>
              <span class="profile-description"><p>August 20 2023</p></span>
          </div>
        </div>
    </div>
    <?php
      include '../app/pages/includes/advert-box.php';
    ?>
    <h4 class="home-heading font-weight-bolder mx-3 mt-5">Latest Post</h4>

    <div class="album py-5">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
          $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id order by id desc limit 9";
          $rows = query($query);
          if($rows)
          {
            foreach($rows as $row)
            {
              include '../app/pages/includes/post-card.php';
            }

          }else 
          {
            echo "No posts found";
          }
          
        ?>
      </div>
    </div>
  </div>
  <div class="text-center">
    <a href="<?=ROOT?>/blog">
    <button>View All Post</button>
    </a>
  </div>
  <?php
      include '../app/pages/includes/advert-box.php';
  ?>
  </main>
  <?php 
    include "../app/pages/includes/footer.php";
  ?>