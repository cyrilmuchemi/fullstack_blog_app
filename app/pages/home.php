<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home - <?=APP_NAME?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/headers.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/styles.css" rel="stylesheet">
  </head>
  <body>
  <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/home" class="d-flex align-items-center mb-2 mb-lg-0">
            <img class="rounded-circle shadow" src="<?=ROOT?>/assets/images/blog-logo.png" alt="" width="58" height="58">
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ms-lg-5">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Blog</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Single Post</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pages</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
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
    <div class="ads-box d-flex flex-column mt-5 p-2 align-items-center justify-content-center rounded-top rounded-bottom">
      <span id="advert">Advertisement</span>
      <span id="advert-desc">You can place ads</span>
      <span id="advert-measure">750×100</span>
    </div>
    <h4 class="home-heading font-weight-bolder mx-3 mt-5">Latest Post</h4>

    <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/assets/images/beach-chilling.jpg" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex">
              <img src="<?=ROOT?>/assets/images/Lydia-Matson.jpg" class="rounded-circle profile-pic" alt="profile picture"/>
              <span class="profile-description"><p>Lydia Matson</p></span>
              <span class="profile-description"><p>August 20 2023</p></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="<?=ROOT?>/assets/images/vr-sitting.jpg" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex">
              <img src="<?=ROOT?>/assets/images/Lydia-Matson.jpg" class="rounded-circle profile-pic" alt="profile picture"/>
              <span class="profile-description"><p>Lydia Matson</p></span>
              <span class="profile-description"><p>August 20 2023</p></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/assets/images/boxing.jpg" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex">
              <img src="<?=ROOT?>/assets/images/Lydia-Matson.jpg" class="rounded-circle profile-pic" alt="profile picture"/>
              <span class="profile-description"><p>Lydia Matson</p></span>
              <span class="profile-description"><p>August 20 2023</p></span>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/assets/images/old-school-car.jpg" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex">
              <img src="<?=ROOT?>/assets/images/Lydia-Matson.jpg" class="rounded-circle profile-pic" alt="profile picture"/>
              <span class="profile-description"><p>Lydia Matson</p></span>
              <span class="profile-description"><p>August 20 2023</p></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/assets/images/gaming-sitting.jpg" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex">
              <img src="<?=ROOT?>/assets/images/Lydia-Matson.jpg" class="rounded-circle profile-pic" alt="profile picture"/>
              <span class="profile-description"><p>Lydia Matson</p></span>
              <span class="profile-description"><p>August 20 2023</p></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/assets/images/cool-home.jpg" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex">
              <img src="<?=ROOT?>/assets/images/Lydia-Matson.jpg" class="rounded-circle profile-pic" alt="profile picture"/>
              <span class="profile-description"><p>Lydia Matson</p></span>
              <span class="profile-description"><p>August 20 2023</p></span>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/assets/images/stadium.jpg" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex">
              <img src="<?=ROOT?>/assets/images/Lydia-Matson.jpg" class="rounded-circle profile-pic" alt="profile picture"/>
              <span class="profile-description"><p>Lydia Matson</p></span>
              <span class="profile-description"><p>August 20 2023</p></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/assets/images/private-jet.jpg" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex">
              <img src="<?=ROOT?>/assets/images/Lydia-Matson.jpg" class="rounded-circle profile-pic" alt="profile picture"/>
              <span class="profile-description"><p>Lydia Matson</p></span>
              <span class="profile-description"><p>August 20 2023</p></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/assets/images/hijab-babe.jpg" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex">
              <img src="<?=ROOT?>/assets/images/Lydia-Matson.jpg" class="rounded-circle profile-pic" alt="profile picture"/>
              <span class="profile-description"><p>Lydia Matson</p></span>
              <span class="profile-description"><p>August 20 2023</p></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ads-box d-flex flex-column mt-5 p-2 align-items-center justify-content-center rounded-top rounded-bottom">
      <span id="advert">Advertisement</span>
      <span id="advert-desc">You can place ads</span>
      <span id="advert-measure">750×100</span>
    </div>
  </main>
<div class="container mt-2">
  <footer class="py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>About</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>&copy; 2023 MetaBlog. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </div>
  </footer>
</div>
<script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>