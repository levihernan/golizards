<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fútbol Lagartos</title>

  <!-- Bootstrap core CSS -->
  <?= css('assets/bootstrap/css/bootstrap.min.css') ?>
  <?= css('assets/css/lizzards.css') ?>

  <?= js('assets/jquery/jquery.min.js') ?>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Audiowide|Monoton|Poiret+One|Press+Start+2P" rel="stylesheet">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139839501-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-139839501-1');
  </script>

<style media="screen">
  html{
    background: url('<?= $site->children()->find('home')->background()->toFile()->url() ?>') no-repeat center center fixed;
    background-size: cover; 
  }
</style>

</head>

<body>

<?php snippet('nav') ?>
