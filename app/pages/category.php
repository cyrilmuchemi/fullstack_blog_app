<?php
include '../app/pages/includes/header.php';
?>
  <main id="main" class="container mt-3">
    <div class="album py-5">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
          $limit = 10;
          $offset = ($PAGE['page_number'] - 1) * $limit;

          $category_slug = $url[1] ?? null;

          if($category_slug)
          {
            $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id where posts.category_id in (select id from categories where slug = :category_slug) order by id desc limit $limit offset $offset";
            $rows = query($query, ['category_slug'=>$category_slug]);
          }
   
          if(!empty($rows))
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
  <div class="col-md-12 mb-4">
        <a href="<?=$PAGE['first-link'] ?>">
        <button class="btn btn-primary">First Page</button>
        </a>
        <a href="<?=$PAGE['prev-link'] ?>">
        <button class="btn btn-primary">Previous Page</button>
        </a>
        <a href="<?=$PAGE['next-link'] ?>">
        <button class="btn btn-primary float-end">Next Page</button>
        </a> 
    </div>
  </main>
  <?php 
    include "../app/pages/includes/footer.php";
  ?>