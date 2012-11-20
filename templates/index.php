<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo isset($title) ? $title : "Home "; ?> - Slim Framework PT-BR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
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

      <div class="jumbotron">
        <h1>Slim! O framework mais fácil de usar</h1>
        <p class="lead">
            O Slim é um micro framework PHP que auxilia na construção de aplicações web ou APIs simples e poderosas de forma rápida.
        </p>
        <p class="lead">
            <span class="alert alert-block"><strong>Detalhe!</strong> Para usá-lo você só precisa do <strong>PHP 5.3.0 ou superior</strong></span>
        </p>        
        <a class="btn btn-large btn-success" href="<?php echo HOST_WEB; ?>instale">Instale Agora</a> 
        <a class="btn btn-large btn-primary" href="<?php echo HOST_WEB; ?>documentacao">Documentação</a>
        <a href="#myModal" role="button" class="btn btn-large btn-inverse" data-toggle="modal">Funcionalidades</a>
      </div>
  
      <hr>
      
 
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Funcionalidades</h3>
      </div>
      <div class="modal-body">
        <ul>
              <li>Poderoso criador de rotas
                  <ul>
                      <li>Padrão e customização de métodos HTTP</li>
                      <li>Parametros de rota com condições e curingas (wildcards)</li>
                      <li>Redirecionamento da rota, pausar e liberar</li>
                      <li>Roteamento de middleware</li>
                  </ul>
              </li>
              <li>Renderização de templates com views customizadas</li>
              <li>Mensagens temporários</li>
              <li>Cookies seguros com criptografia AES-256</li>
              <li>Cache HTTP</li>
              <li>Escrita de Logs customizados</li>
              <li>Tratamento de erros e debug</li>
              <li>Gatilhos na arquitetura e no middleware</li>
              <li>Configuração simples</li>
          </ul>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
      </div>
    </div>
      <hr>
      
      <div class="footer">
          <p>&copy; <a href="http://slimframework.com">Slim Framework</a> 2012 - Versão traduzida e modificada por <a href="#">Paulo Fernandes</a></p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
