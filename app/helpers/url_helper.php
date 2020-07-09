<?php 
//para redireccionar pagina
function rediccionar($pagina){
    header('location: ' . RUTA_URL . $pagina);
}
?>