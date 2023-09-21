<?php 

  if(!empty($_POST))
  {
    //validate
    $errors = [];

    $query = "select * from users where email = :email limit 1";
    $row = query($query, ['email'=>$_POST['email']]);

    if($row)
    {
      $data = [];
      if(password_verify($_POST['password'], $row[0]['password']))
      {
        //grant access
        authenticate($row[0]);
        redirect('admin');

      }else{
        $errors['email'] = "wrong email or password";
      }

    }else{
      $errors['email'] = "wrong email or password";
    }
  }
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Login - <?=APP_NAME?></title>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/sign-in.css" rel="stylesheet">
  </head>
<body class="d-flex align-items-center py-4 bg-body-tertiary"> 
<main class="form-signin w-100 m-auto">
  <form method="post">
   <a href="home">
   <img class="mb-4 rounded-circle shadow" src="<?=ROOT?>/assets/images/blog-logo.png" alt="" width="112" height="112">
   </a>
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <?php if(!empty($errors['email'])) :?>
    <div class="alert alert-danger"><?= $errors['email'] ?></div>
    <?php endif; ?>
    <div class="form-floating">
      <input value="<?=old_value('email')?>" name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input  value="<?=old_value('password')?>" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="my-2">Don't have an account? <a href="<?=ROOT?>/signup">Signup here</a></div>
    <div class="form-check text-start my-3">
      <input name="remember" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; <?= date("Y") ?></p>
  </form>
</main>
<script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
