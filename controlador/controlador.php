<?php
require_once("modelos/modelo.php");
class modeloController{
    private $model;
    public function __construct(){
        $this -> model = new Modelo();
    }

    // Mostrar datos
        static function inicio(){
        require_once("vistas/index_vista.php");
    }

    //vista de registro
    static function registro(){
        require_once("vistas/vista_registro.php");
    }
    // vista de los viajes 
    static function paseo(){
        $viaje = new Modelo();
        $datos = $viaje -> mostrar("paseo", "1");
        require_once("vistas/vista_buscar.php");
    }

    //gradar
    static function guardar(){
        $idpaseo = $_REQUEST['idpaseo'];
        $ida = $_REQUEST['ida'];
        $vuelta = $_REQUEST['vuelta'];
        $motivo = $_REQUEST['motivo'];
        $presupuesto = $_REQUEST['presupuesto'];
        $c_origen = $_REQUEST['c_origen'];
        $c_destino = $_REQUEST['c_destino'];
        $gasto_real = $_REQUEST['gasto_real'];
        $transporte = $_REQUEST['transporte'];
        $n_personas = $_REQUEST['n_personas'];
        $data = $idpaseo.",'".$ida."','".$vuelta."','".$motivo."',".$presupuesto.",'".$c_origen.
                "','".$c_destino."',".$gasto_real.",'".$transporte."',".$n_personas;
        $viaje = new Modelo();
        $datos = $viaje->insertar("paseo", $data);
        header("location:".urlsite);  
    }


    //buscar
    static function buscar(){  
        $idpaseo = $_REQUEST['idpaseo'];
        $ida = $_REQUEST['ida'];
        $vuelta = $_REQUEST['vuelta'];
        $motivo = $_REQUEST['motivo'];
        $presupuesto = $_REQUEST['presupuesto'];
        $c_origen = $_REQUEST['c_origen'];
        $c_destino = $_REQUEST['c_destino'];
        $viaje = new Modelo();
        $datos       = $viaje -> mostrar("paseo", "idpaseo=".$idpaseo.",ida='".$ida."',vuelta='".$vuelta."',motivo='".$motivo.
                                              "'presupuesto=".$presupuesto."c_origen='".$c_origen."'c_destino='".$c_destino);                                                                                                                                                                        
        require_once("vistas/vista_buscar.php");
    }
    

    // vista de editar
    static function editar(){  
        $idpaseo = $_REQUEST['idpaseo']; 
        $viaje = new Modelo;
        $datos = $viaje->mostrar("paseo","idpaseo=".$idpaseo);  

        require_once("vistas/vista_editar.php");
    }

    //actualizar
    static function actualizar(){
        $idpaseo = $_REQUEST['idpaseo'];
        $ida = $_REQUEST['ida'];
        $vuelta = $_REQUEST['vuelta'];
        $motivo = $_REQUEST['motivo'];
        $presupuesto = $_REQUEST['presupuesto'];
        $c_origen = $_REQUEST['c_origen'];
        $c_destino = $_REQUEST['c_destino'];
        $gasto_real = $_REQUEST['gasto_real'];
        $transporte = $_REQUEST['transporte'];
        $n_personas = $_REQUEST['n_personas'];
        $data = "idpaseo=".$idpaseo.
                ",ida='".$ida.
                "',vuelta='".$vuelta.
                "',motivo='".$motivo.
                "',presupuesto=".$presupuesto.
                ",c_origen='".$c_origen.
                "',c_destino='".$c_destino.
                "',gasto_real=".$gasto_real.
                ",transporte='".$transporte;
                "',n_personas=".$n_personas.
        $paseo = new Modelo();
        $datos = $paseo->actualizar("paseo", $data,"idpaseo=".$idpaseo);
        header("location:".urlsite);  
    }

    static function eliminar(){  
        $idpaseo = $_REQUEST['idpaseo']; 
        $paseo = new Modelo();
        $datos = $paseo->eliminar("paseo","idpaseo=".$idpaseo);  
        header("location:".urlsite);
    }
   
}