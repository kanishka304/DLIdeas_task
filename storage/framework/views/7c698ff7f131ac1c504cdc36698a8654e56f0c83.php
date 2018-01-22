<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

 <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/mystyle.css')); ?>">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="margin-top: 2%">
 

 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#" style="margin-right: 3%"><b>Teacher Web Application</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" style="color: #fff" href="<?php echo e(url('/')); ?>">Assginment <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #fff" href="<?php echo e(url('/create')); ?>">MCQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #fff" href="<?php echo e(url('/createfitb')); ?>">FITB</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #fff" href="<?php echo e(url('/qbank')); ?>">Question Bank</a>
      </li>
    </ul>
   
  </div>
</nav>

