<?php

if(!empty($_POST))
{
  //validate
  $errors = [];

  if(empty($_POST['username']))
  {
    $errors['username'] = "A username is required";
  }else
  if(!preg_match("/^[a-zA-Z]+$/", $_POST['username']))
  {
    $errors['username'] = "Username can only have letters and no spaces";
  }

  $query = "select id from users where email = :email limit 1";
  $email = query($query, ['email'=>$_POST['email']]);

  if(empty($_POST['email']))
  {
    $errors['email'] = "Email is required";
  }else
  if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
  {
    $errors['email'] = "Email not valid";
  }else
  if($email)
  {
    $errors['email'] = "That email is already in use";
  }

  if(empty($_POST['password']))
  {
    $errors['password'] = "Password is required";
  }else
  if(strlen($_POST['password']) < 8)
  {
    $errors['password'] = "Password must be 8 character or more";
  }else
  if($_POST['password'] !== $_POST['retype_password'])
  {
    $errors['password'] = "Passwords do not match";
  }

  if(empty($_POST['terms']))
  {
    $errors['terms'] = "Please accept the terms";
  }

  if(empty($errors))
  {
    //save to database
    $data = [];
    $data['username'] = $_POST['username'];
    $data['email']    = $_POST['email'];
    $data['role']     = "user";
    $data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "insert into users (username,email,password,role) values (:username,:email,:password,:role)";
    query($query, $data);

    redirect('login');

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
    <h1 class="h3 mb-3 fw-normal">Create an account</h1>
    <?php if(!empty($errors)) :?>
    <div class="alert alert-danger">Please fix the errors below</div>
    <?php endif; ?>
    <div class="form-floating">
      <input value="<?=old_value('username')?>" name="username" type="text" class="form-control" id="floatingInput" placeholder="Username">
      <label for="floatingInput">Username</label>
    </div>
    <?php if(!empty($errors['username'])) :?>
    <div class="text-danger"><?=$errors['username']?></div>
    <?php endif; ?>

    <div class="form-floating">
      <input value="<?=old_value('email')?>" name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <?php if(!empty($errors['email'])) :?>
    <div class="text-danger"><?=$errors['email']?></div>
    <?php endif; ?>

    <div class="form-floating">
      <input  value="<?=old_value('password')?>" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <?php if(!empty($errors['password'])) :?>
    <div class="text-danger"><?=$errors['password']?></div>
    <?php endif; ?>

    <div class="form-floating">
      <input  value="<?=old_value('retype_password')?>" name="retype_password" type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
      <label for="floatingPassword">Confirm Password</label>
    </div>
    <div class="my-2">Already have an account? <a href="<?=ROOT?>/login">Login here</a></div>
    <div class="form-check text-start my-3">
      <input <?=old_checked('terms')?> name="terms" class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Accept terms & conditions
      </label>
    </div>

    <?php if(!empty($errors['terms'])) :?>
    <div class="text-danger"><?=$errors['terms']?></div>
    <?php endif; ?>
    <button class="btn btn-primary w-100 py-2" type="submit">Create</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; <?= date("Y") ?></p>
  </form>
</main>
<script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
