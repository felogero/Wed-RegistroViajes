<?php
require_once("index.php");
require_once("controlador/controlador.php");
if(isset($_GET['r'])):
   if(method_exists("modeloController",$_GET['r'])):
      modeloController::{$_GET['r']}();
endif;
else:
     modeloController::registro();

endif;
