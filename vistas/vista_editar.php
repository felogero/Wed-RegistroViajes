<?php
require_once("layout/header.php");
?>

<br>

    <div class="formulario">
     <form method="get" >

         <h2>Edita tu Viaje</h2>
         <br>
         <?php
                foreach($datos as $key => $value):
                    foreach($value as $v):
                    ?>
         <label for="idpaseo">Numero de Documento:</label><br>
         <input type="number" name="idpaseo" value="<?php echo $v['idpaseo'] ?>" >
         <br>
         <label for="ida">Ida:</label><br>
         <input type="date" name="ida" value="<?php echo $v['ida'] ?>">
         <br>
         <label for="vuelta">Vuelta:</label><br>
         <input type="date" name="vuelta" value="<?php echo $v['vuelta'] ?>">
         <br>
         <label for="motivo">Motivo De tu Viaje:</label><br>
         <input type="text" name="motivo" value="<?php echo $v['motivo'] ?>">
         <br>
         <label for="presupuesto">presupuesto:</label><br>
         <input type="number" name="presupuesto" value="<?php echo $v['presupuesto'] ?>">
         <br>
         <label for="c_origen">ciudad Origen:</label><br>
         <input type="text" name="c_origen" value="<?php echo $v['c_origen'] ?>" >
         <br>
         <label for="c_destino">ciudad Destino:</label><br>
         <input type="text" name="c_destino" value="<?php echo $v['c_destino'] ?>" >
         <br>
         <label for="gasto_real">Gasto Real:</label><br>
         <input type="number" name="gasto_real" value="<?php echo $v['gasto_real'] ?>">
         <br>
         <label for="transporte">Tipo de Transporte:</label><br>
         <input type="text" name="transporte" value="<?php echo $v['transporte'] ?>">
         <br>
         <label for="n_personas">Numero de Personas:</label><br>
         <input type="number" name="n_personas" value="<?php echo $v['n_personas'] ?>">
         <br>
         
         <input class="btn" type="submit" name="btn" value="ACTUALIZAR">
         <input type="hidden" name="r" value="actualizar">
         <br>
         <?php 
                endforeach; 
            endforeach;
                ?>
 </div>
 <br>
 <br>

<?php
require_once("layout/footer.php");