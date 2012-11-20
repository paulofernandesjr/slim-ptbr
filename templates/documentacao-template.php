<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?> - Slim Framework PT-BR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="assets/css/docs.css" rel="stylesheet">
        <link href="assets/css/prettify.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body data-spy="scroll" data-target=".bs-docs-sidebar">

        <!-- Navbar
        ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="<?php echo HOST_WEB; ?>">Slim Framework</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="">
                                <a href="<?php echo HOST_WEB; ?>">Início</a>
                            </li>
                            <li class="">
                                <a href="<?php echo HOST_WEB; ?>instale">Instale</a>
                            </li>
                            <li class="">
                                <a href="<?php echo HOST_WEB; ?>ajuda">Ajuda</a>
                            </li>
                            <li class="">
                                <a href="<?php echo HOST_WEB; ?>equipe">Equipe</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo HOST_WEB; ?>docs">Documentação</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Masthead
        ================================================== -->
        <header class="jumbotron subhead" id="overview">
            <div class="container">
                <h1>Documentação Slim Framework</h1>
                <p class="lead"><a href="<?php echo HOST_WEB; ?>instale">Instale o Slim</a> e leia a documentação para esclarecer suas dúvidas e conhecer mais o micro framework.</p>
            </div>
        </header>


        <div class="container">

            <!-- Docs nav
            ================================================== -->
            <div class="row">
                <div class="span3 bs-docs-sidebar">
                    <ul class="nav nav-list bs-docs-sidenav">
                        <li><a href="#getting-started"><i class="icon-chevron-right"></i>GETTING STARTED</a></li>
                        <li class="inner"><a href="#g-installation"><i class="icon-chevron-right"></i>Installation</a></li>
                        <li class="inner"><a href="#g-system-requirements"><i class="icon-chevron-right"></i>System Requirements</a></li>
                        <li class="inner"><a href="#g-hello-world"><i class="icon-chevron-right"></i>Hello World</a></li>
                        <li><a href="#configuration"><i class="icon-chevron-right"></i>CONFIGURATION</a></li>
                        <li class="inner"><a href="#c-overview"><i class="icon-chevron-right"></i>Overview</a></li>
                        <li class="inner"><a href="#c-application-settings"><i class="icon-chevron-right"></i>Application Settings</a></li>
                        <li class="inner"><a href="#c-application-names"><i class="icon-chevron-right"></i>Application Names and Scopes</a></li>
                        <li class="inner"><a href="#c-application-modes"><i class="icon-chevron-right"></i>Application Modes</a></li>
                        <li><a href="#routing"><i class="icon-chevron-right"></i>ROUTING</a></li>
                        <li class="inner"><a href="#r-overview"><i class="icon-chevron-right"></i>Overview</a></li>
                        <li class="inner"><a href="#r-get"><i class="icon-chevron-right"></i>GET Routes</a></li>
                        <li class="inner"><a href="#r-post"><i class="icon-chevron-right"></i>POST Routes</a></li>
                        <li class="inner"><a href="#r-put"><i class="icon-chevron-right"></i>PUT Routes</a></li>
                        <li class="inner"><a href="#r-delete"><i class="icon-chevron-right"></i>DELETE Routes</a></li>
                        <li class="inner"><a href="#r-options"><i class="icon-chevron-right"></i>OPTIONS Routes</a></li>
                        <li class="inner"><a href="#r-custom"><i class="icon-chevron-right"></i>Custom HTTP Methods</a></li>
                        <li class="inner"><a href="#r-parameters"><i class="icon-chevron-right"></i>Route Parameters</a></li>
                        <li class="inner"><a href="#r-names"><i class="icon-chevron-right"></i>Route Names</a></li>
                        <li class="inner"><a href="#r-conditions"><i class="icon-chevron-right"></i>Route Conditions</a></li>
                        <li class="inner"><a href="#r-middleware"><i class="icon-chevron-right"></i>Route Middleware</a></li>
                        <li class="inner"><a href="#r-helper"><i class="icon-chevron-right"></i>Helper Methods</a></li>
                        <li class="inner"><a href="#r-url"><i class="icon-chevron-right"></i>URL Rewriting</a></li>
                        <li class="inner"><a href="#r-trailing"><i class="icon-chevron-right"></i>Trailing Slashes</a></li>
                        <li><a href="#environment"><i class="icon-chevron-right"></i>ENVIRONMENT</a></li>
                        <li class="inner"><a href="#e-overview"><i class="icon-chevron-right"></i>Overview</a></li>
                        <li><a href="#request-object"><i class="icon-chevron-right"></i>REQUEST OBJECT</a></li>
                        <li class="inner"><a href="#ro-overview"><i class="icon-chevron-right"></i>Overview</a></li>
                        <li class="inner"><a href="#ro-method"><i class="icon-chevron-right"></i>Method</a></li>
                        <li class="inner"><a href="#ro-header"><i class="icon-chevron-right"></i>Header</a></li>
                        <li class="inner"><a href="#ro-body"><i class="icon-chevron-right"></i>Body</a></li>
                        <li class="inner"><a href="#ro-variables"><i class="icon-chevron-right"></i>Variables</a></li>
                        <li class="inner"><a href="#ro-cookies"><i class="icon-chevron-right"></i>Cookies</a></li>
                        <li class="inner"><a href="#ro-paths"><i class="icon-chevron-right"></i>Paths</a></li>
                        <li class="inner"><a href="#ro-xmlhttprequest"><i class="icon-chevron-right"></i>XMLHttpRequest</a></li>
                        <li class="inner"><a href="#ro-helper"><i class="icon-chevron-right"></i>Helper Methods</a></li>
                        <li><a href="#response-object"><i class="icon-chevron-right"></i>RESPONSE OBJECT</a></li>
                        <li class="inner"><a href="#re-overview"><i class="icon-chevron-right"></i>Overview</a></li>
                        <li class="inner"><a href="#re-status"><i class="icon-chevron-right"></i>Status</a></li>
                        <li class="inner"><a href="#re-header"><i class="icon-chevron-right"></i>Header</a></li>
                        <li class="inner"><a href="#re-body"><i class="icon-chevron-right"></i>Body</a></li>
                        <li class="inner"><a href="#re-cookies"><i class="icon-chevron-right"></i>Cookies</a></li>
                        <li class="inner"><a href="#re-helper"><i class="icon-chevron-right"></i>Helper Methods</a></li>
                        <li><a href="#view"><i class="icon-chevron-right"></i>VIEW</a></li>
                        <li class="inner"><a href="#v-overview"><i class="icon-chevron-right"></i>Overview</a></li>
                        <li class="inner"><a href="#v-rendereing"><i class="icon-chevron-right"></i>Rendering Templates</a></li>
                        <li class="inner"><a href="#v-custom"><i class="icon-chevron-right"></i>Custom Views</a></li>
                        <li class="inner"><a href="#v-setting"><i class="icon-chevron-right"></i>Setting Data</a></li>
                        <li><a href="#http-caching"><i class="icon-chevron-right"></i>HTTP CACHING</a></li>
                        <li class="inner"><a href="#h-overview"><i class="icon-chevron-right"></i>Overview</a></li>
                        <li class="inner"><a href="#h-etag"><i class="icon-chevron-right"></i>ETag</a></li>
                        <li class="inner"><a href="#h-last"><i class="icon-chevron-right"></i>Last-Modified</a></li>
                        <li class="inner"><a href="#h-expires"><i class="icon-chevron-right"></i>Expires</a></li>
                        <li><a href="#middleware"><i class="icon-chevron-right"></i>MIDDLEWARE</a></li>
                        <li class="inner"><a href="#m-overview"><i class="icon-chevron-right"></i>Overview</a></li>
                        <li class="inner"><a href="#m-how-to-use"><i class="icon-chevron-right"></i>How to Use Middleware</a></li>
                        <li class="inner"><a href="#m-how-to-write"><i class="icon-chevron-right"></i>How to Write Middleware</a></li>
                        <li><a href="#hooks"><i class="icon-chevron-right"></i>HOOKS</a></li>
                        <li class="inner"><a href="#ho-overview"><i class="icon-chevron-right"></i>Overview</a></li>
                        <li class="inner"><a href="#ho-using"><i class="icon-chevron-right"></i>Using Hooks</a></li>
                        <li class="inner"><a href="#ho-default"><i class="icon-chevron-right"></i>Default Hooks</a></li>
                        <li class="inner"><a href="#ho-custom"><i class="icon-chevron-right"></i>Custom Hooks</a></li>
                        <li><a href="#flash-messaging"><i class="icon-chevron-right"></i>FLASH MESSAGING</a></li>
                        <li class="inner"><a href="#f-overview"><i class="icon-chevron-right"></i>Overview</a></li>
                        <li class="inner"><a href="#f-next"><i class="icon-chevron-right"></i>Flash Next</a></li>
                        <li class="inner"><a href="#f-now"><i class="icon-chevron-right"></i>Flash Now</a></li>
                        <li class="inner"><a href="#f-keep"><i class="icon-chevron-right"></i>Flash Keep</a></li>
                        <li><a href="#sessions"><i class="icon-chevron-right"></i>SESSIONS</a></li>
                        <li class="inner"><a href="#se-native"><i class="icon-chevron-right"></i>Native Session Store</a></li>
                        <li class="inner"><a href="#se-cookie"><i class="icon-chevron-right"></i>Cookie Session Store</a></li>
                        <li><a href="#logging"><i class="icon-chevron-right"></i>LOGGING</a></li>
                        <li class="inner"><a href="#l-overview"><i class="icon-chevron-right"></i>Overview</a></li>
                        <li class="inner"><a href="#l-enable-disable"><i class="icon-chevron-right"></i>Enable/Disable Logging</a></li>
                        <li class="inner"><a href="#l-levels"><i class="icon-chevron-right"></i>Log Levels</a></li>
                        <li class="inner"><a href="#l-writers"><i class="icon-chevron-right"></i>Log Writers</a></li>
                        <li><a href="#error-handling"><i class="icon-chevron-right"></i>ERROR HANDLING</a></li>
                        <li class="inner"><a href="#er-overview"><i class="icon-chevron-right"></i>Overview</a></li>
                        <li class="inner"><a href="#er-handler"><i class="icon-chevron-right"></i>Error Handler</a></li>
                        <li class="inner"><a href="#er-not-found"><i class="icon-chevron-right"></i>Not Found Handler</a></li>
                        <li class="inner"><a href="#er-debugging"><i class="icon-chevron-right"></i>Debugging</a></li>
                        <li class="inner"><a href="#er-output"><i class="icon-chevron-right"></i>Output Redirection</a></li>
                    </ul>
                </div>
                <div class="span9">
                    <div id="getting-started">
                        <div class="page-header">
                            <h1>GETTING STARTED</h1>
                        </div>
                        <div id="g-installation">
                            <h3>Installation</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="g-system-requirements">
                            <h3>System Requirements</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="g-hello-world">
                            <h3>Hello World</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>


                    <div id="configuration">
                        <div class="page-header">
                            <h1>CONFIGURATION</h1>
                        </div>

                        <div id="c-overview">
                            <h3>Overview</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="c-application-settings">
                            <h3>Application Settings</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="c-application-names">
                            <h3>Application Names and Scopes</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="c-application-modes">
                            <h3>Application Modes</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>

                    <div id="routing">
                        <div class="page-header">
                            <h1>ROUTING</h1>
                        </div>
                        <div id="r-overview">
                            <h3>Overview</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="r-get">
                            <h3>GET Routes</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="r-post">
                            <h3>POST Routes</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="r-put">
                            <h3>PUT Routes</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="r-delete">
                            <h3>DELETE Routes</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="r-options">
                            <h3>OPTIONS Routes</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="r-custom">
                            <h3>Custom HTTP Methods</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="r-parameters">
                            <h3>Route Parameters</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="r-names">
                            <h3>Route Names</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="r-conditions">
                            <h3>Route Conditions</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="r-middleware">
                            <h3>Route Middleware</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="r-helper">
                            <h3>Helper Methods</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="r-url">
                            <h3>URL Rewriting</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="r-traidivng">
                            <h3>Traidivng Slashes</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>

                    <div id="environment">
                        <div class="page-header">
                            <h1>ENVIRONMENT</h1>
                        </div>
                        <div id="e-overview">
                            <h3>Overview</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>

                    <div id="request-object">
                        <div class="page-header">
                            <h1>REQUEST OBJECT</h1>
                        </div>
                        <div id="ro-overview">
                            <h3>Overview</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="ro-method">
                            <h3>Method</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="ro-header">
                            <h3>Header</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="ro-body">
                            <h3>Body</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="ro-variables">
                            <h3>Variables</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="ro-cookies">
                            <h3>Cookies</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="ro-paths">
                            <h3>Paths</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="ro-xmlhttprequest">
                            <h3>XMLHttpRequest</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="ro-helper">
                            <h3>Helper Methods</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>

                    <div id="response-object">
                        <div class="page-header">
                            <h1>RESPONSE OBJECT</h1>
                        </div>
                        <div id="re-overview">
                            <h3>Overview</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="re-status">
                            <h3>Status</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="re-header">
                            <h3>Header</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="re-body">
                            <h3>Body</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="re-cookies">
                            <h3>Cookies</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="re-helper">
                            <h3>Helper Methods</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>

                    <div id="view">
                        <div class="page-header">
                            <h1>VIEW</h1>
                        </div>
                        <div id="v-overview">
                            <h3>Overview</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="v-rendereing">
                            <h3>Rendering Templates</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="v-custom">
                            <h3>Custom Views</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="v-setting">
                            <h3>Setting Data</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>

                    <div id="http-caching">
                        <div class="page-header">
                            <h1>HTTP CACHING</h1>
                        </div>
                        <div id="h-overview">
                            <h3>Overview</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="h-etag">
                            <h3>ETag</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="h-last">
                            <h3>Last-Modified</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="h-expires">
                            <h3>Expires</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>

                    <div id="middleware">
                        <div class="page-header">
                            <h1>MIDDLEWARE</h1>
                        </div>
                        <div id="m-overview">
                            <h3>Overview</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="m-how-to-use">
                            <h3>How to Use Middleware</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="m-how-to-write">
                            <h3>How to Write Middleware</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>
                    <div id="hooks">
                        <div class="page-header">
                            <h1>HOOKS</h1>
                        </div>
                        <div id="ho-overview">
                            <h3>Overview</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="ho-using">
                            <h3>Using Hooks</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="ho-default">
                            <h3>Default Hooks</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="ho-custom">
                            <h3>Custom Hooks</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>

                    <div id="flash-messaging">
                        <div class="page-header">
                            <h1>FLASH MESSAGING</h1>
                        </div>

                        <div id="f-overview">
                            <h3>Overview</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="f-next">
                            <h3>Flash Next</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="f-now">
                            <h3>Flash Now</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="f-keep">
                            <h3>Flash Keep</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>

                    <div id="sessions">
                        <div class="page-header">
                            <h1>SESSIONS</h1>
                        </div>
                        <div id="se-native">
                            <h3>Native Session Store</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="se-cookie">
                            <h3>Cookie Session Store</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>

                    <div id="logging">
                        <div class="page-header">
                            <h1>LOGGING</h1>
                        </div>
                        <div id="l-overview">
                            <h3>Overview</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="l-enable-disable">
                            <h3>Enable/Disable Logging</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="l-levels">
                            <h3>Log Levels</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="l-writers">
                            <h3>Log Writers</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>

                    <div id="error-handling">
                        <div class="page-header">
                            <h1>ERROR HANDLING</h1>
                        </div>
                        <div id="er-overview">
                            <h3>Overview</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="er-handler">
                            <h3>Error Handler</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="er-not-found">
                            <h3>Not Found Handler</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="er-debugging">
                            <h3>Debugging</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                        <div id="er-output">
                            <h3>Output Redirection</h3>
                            <div class="container">
                                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>



        <!-- Footer
        ================================================== -->
        <footer class="footer">
            <div class="container">
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; <a href="http://slimframework.com">Slim Framework</a> 2012 - Versão traduzida e modificada por <a href="#">Paulo Fernandes</a></p>
            </div>
        </footer>



        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/prettify.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/app.js"></script>
        <script>
            $(document).ready(function(){
                
            });
            
            $(function(){
                
                $(".bs-docs-sidenav li").click(function(){
                    var el = $(this);
                    var elemento = el.next();
                    $(".inner").addClass("hide");
                    while( elemento.hasClass("inner") ){
                        change_status(elemento);
                        elemento = elemento.next();
                    }
                });
                
                
            });
            
            function change_status(el){
                el.removeClass("hide");
            }
            
        </script>
    </body>
</html>
