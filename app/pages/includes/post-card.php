  <div class="col">
          <div class="card shadow-sm">
          <a href="<?=ROOT?>/post/<?=$row['slug']?>">
            <img src="<?=get_image($row['image'])?>" class="img-fluid"/>
          </a>
            <div class="card-body">
            <span class="badge bg-gray text-primary"><?=esc($row['category'] ?? 'unknown')?></span>
            <a href="<?=ROOT?>/post/<?=$row['slug']?>">
            <h5><?=esc($row['title'])?></h5>
            </a>
              <div class="d-flex">
              <img src="<?=ROOT?>/assets/images/Lydia-Matson.jpg" class="rounded-circle profile-pic" alt="profile picture"/>
              <span class="profile-description"><p>Lydia Matson</p></span>
              <span class="profile-description"><p><?=date("jS M, Y", strtotime($row['date']))?></p></span>
              </div>
            </div>
          </div>
    </div>