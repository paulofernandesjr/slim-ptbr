<?php
    if( $_SERVER['REMOTE_ADDR'] == '127.0.0.1' ){
        DEFINE('HOST_WEB', 'http://localhost/slim-ptbr/');
    } else {
        DEFINE('HOST_WEB', 'http://slim-ptbr.com.br/');
    }