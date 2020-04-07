<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <?php echo $__env->yieldContent('styles'); ?>
</head>

<body style="background-image: url('https://previews.123rf.com/images/bignai/bignai1801/bignai180100128/94489626-piles-of-old-books-on-a-table-in-blur-background.jpg');">
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
<?php echo $__env->yieldContent('content'); ?> 
</div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/layouts/master.blade.php ENDPATH**/ ?>