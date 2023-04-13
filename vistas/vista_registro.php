<?php
require_once("layout/header.php");
?>

<br>

    <div class="formulario">
        <form method="get" autocomplete="off">

                <h2>Aparta Tu Viaje</h2>
                <br>
                <label for="idpaseo">Numero de documento:</label><br>
                <input type="number" name="idpaseo" id="idpaseo" placeholder=" Numero de Documento" required="true">            
                <br>
                <label for="ida">Ida:</label><br>
                <input type="date" name="ida" id="ida" required="true">
                <br>
                <label for="vuelta">Vuelta:</label><br>
                <input type="date" name="vuelta" id="vuelta" required="true">
                <br>
                <label for="motivo">Motivo de Tu Viaje:</label><br>
                <input type="text" name="motivo" id="motivo" placeholder=" Motivo" required="true">
                <br>
                <label for="presupuesto">Presupuesto:</label><br>
                <input type="number" name="presupuesto" id="presupuesto" placeholder=" $ $ $" required="true" step="any">
                <br>
                <label for="c_origen">Ciudad Origen:</label><br>
                <input type="text" name="c_origen" id="c_origen" placeholder=" Origen" required="true" step="any">
                <br>
                <label for="c_destino">Ciudad Destino:</label><br>
                <input type="text" name="c_destino" id="c_destino" placeholder=" Destino" required="true" step="any">
                <br>
                <label for="gasto_real">Gasto Real:</label><br>
                <input type="number" name="gasto_real" id="gasto_real" placeholder=" $ $ $" required="true" step="any">
                <br>
                <label for="transporte">Tipo de Transporte:</label><br>
                <input type="text" name="transporte" id="transporte" placeholder=" Transporte" required="true" step="any">
                <br>
                <label for="n_personas">Numero de personas:</label><br>
                <input type="number" name="n_personas" id="n_personas" placeholder=" --" required="true" step="any">
                <br>
                <input class="btn" type="submit" name="btn" value="GUARDAR">
                <input type="hidden" name="r" value="guardar">
                                            
    </div>
<br>
<br>
<?php
require_once("layout/footer.php");