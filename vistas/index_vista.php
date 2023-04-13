<?php
require_once("layout/header.php");
?>

<br>
    <div class="inicio">
        <form action="login" autocomplete="off">
            <div class="elemento">
                <input type="email" id="email" 
                placeholder="Escribe tu Correo" required="true">
            </div>           
            <div class="elemento">
                <input type="password" id="password" 
                placeholder="Escribe tu Clave" required="true">
            </div>            
            <div class="elemento">
                <input class="bt" type="submit" value="Ingresar">
            </div>
        </form>
    </div>

<?php
require_once("layout/footer.php");