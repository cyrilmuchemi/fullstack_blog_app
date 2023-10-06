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