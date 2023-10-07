<?php
include '../app/pages/includes/header.php';
?>
  <main id="main" class="container mt-3">
    <div class="container m-4">
        <?php

          $slug = $url[1] ?? null;

          if($slug)
          {
            $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id where posts.slug = :slug limit 1";
            $row = query_row($query, ['slug'=>$slug]);
          }

          if($row)
          {
            ?>
            <span class="badge bg-primary"><?=$row['category']?></span>
            <h5><?=esc($row['title'])?></h5>
            <div class="d-flex">
                <img src="<?=ROOT?>/assets/images/Lydia-Matson.jpg" class="rounded-circle profile-pic" alt="profile picture"/>
                <span class="profile-description"><p>Lydia Matson</p></span>
                <span class="profile-description"><p><?=date("jS M, Y", strtotime($row['date']))?></p></span>
            </div>
              <img src="<?=get_image($row['image'])?>" class="img-fluid" height="60"/>
              <div>
                <p>
                  <?=$row['content']?>
                </p>
              </div>
            <?php
          }else 
          {
            echo "No posts found";
          }
        ?>
        </div>
  </main>
  <?php 
    include "../app/pages/includes/footer.php";
  ?>