<?php
require_once'config/config.php';
require_once'helpers/url_helper.php';
/*require_once'librerias/Base.php';
require_once'librerias/Controller.php';
require_once'librerias/Core.php';*/
//autoload php
spl_autoload_register(function($name_clase){
    require_once 'librerias/' . $name_clase . '.php';
});
?>