<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo isset($title) ? $title : "Home "; ?> - Slim Framework PT-BR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O Slim é um micro framework PHP que auxilia na construção de aplicações web ou APIs simples e poderosas de forma rápida.">
    <meta name="author" content="Paulo Fernandes">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/my-style.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="<?php echo HOST_WEB; ?>">Início</a></li>
          <li><a href="<?php echo HOST_WEB; ?>ajuda">Ajuda</a></li>
          <li><a href="<?php echo HOST_WEB; ?>equipe">Equipe</a></li>
        </ul>
        <h3 class="muted"><a href="<?php echo HOST_WEB; ?>">Slim Framework</a></h3>
      </div>

      <hr>