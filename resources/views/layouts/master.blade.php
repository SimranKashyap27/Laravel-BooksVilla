<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      @yield('styles')
</head>

<body style="background-image: url('https://previews.123rf.com/images/bignai/bignai1801/bignai180100128/94489626-piles-of-old-books-on-a-table-in-blur-background.jpg');">
@include('partials.header')

<div class="container">
@yield('content') 
</div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@yield('scripts')
</body>
</html>