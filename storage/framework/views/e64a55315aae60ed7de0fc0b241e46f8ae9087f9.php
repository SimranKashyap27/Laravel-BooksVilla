<!DOCTYPE html>
<html lang="en">
<head>
  <title>BooksVilla</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
.navbar-brand, .font-beyond { font-family:'Beyond The Mountains','Nothing You Could Do', sans-serif; }

</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="letter-spacing:3px;">BooksVilla</a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="<?php echo e(route('shop.cart')); ?>" style="margin-left:62em;"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(Auth::check()): ?>
        <li><a href="<?php echo e(route('user.profile')); ?>"><span class="glyphicon glyphicon-user"></span> User Profile</a></li>
        <li><a href="<?php echo e(route('user.logout')); ?>"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      <?php else: ?>
        <li><a href="<?php echo e(route('user.signup')); ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="<?php echo e(route('user.signin')); ?>"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
      <?php endif; ?>
    </ul>
  </div>
</nav>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel-BooksVilla\resources\views/partials/header.blade.php ENDPATH**/ ?>