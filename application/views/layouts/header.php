<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?= $title ?></title>

  <!-- Font Google -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet"> 

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <!-- App CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">

</head>
<body>

  <!-- ==================Header Section=================== -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow">
      <div class="container">
        <a class="navbar-brand text-uppercase" href="javascript:void(0)">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-uppercase <?php if($title == 'HOME - SIMPATIKU') {echo "active";}?> " href="<?= base_url() ?>">News Portal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="data-statistik.html">Data Statistik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="table.html">Table</a>
            </li>
              <a class="nav-link text-uppercase <?php if ($title == 'Info Flyer - SIMPATIKU'){echo "active";} ?>"  href="<?= base_url('info-flayer')?>">Info Flyer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase <?php if ($title == 'Info Peta - SIMPATIKU'){echo "active";} ?>" href="<?= base_url('peta-kab')?>">Peta Kab</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase <?php if ($title == 'Office - SIMPATIKU'){echo "active";} ?>" href="<?= base_url('office')?>">Kantor</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- ==================End Header Section=================== -->

