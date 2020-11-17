<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('/css/styles.css')?>">
    <title>Verkkokauppademo</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Yritys X</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Yhteystiedot</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tuotteet
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php foreach($tuoteryhmat as $tuoteryhma): ?>
            <a class="dropdown-item" href="<?= site_url('home/tuotteet/' . $tuoteryhma['id'])?>"><?=$tuoteryhma['nimi']?></a>
          <?php endforeach; ?>
          
         
          
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a id="kori" class="nav-link" href="<?= site_url('ostoskori/index')?>">
        <i class="fas fa-shopping-cart"></i>
        <span>
        <?php
        /* ternary operation */
        echo isset($_SESSION['kori']) ? count($_SESSION['kori']) : 0;

/*         if (isset($_SESSION['kori'])) {
          echo count($_SESSION['kori']);
        }
        else {
          echo "0";
        } */
        ?>
        </span>
        </a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">