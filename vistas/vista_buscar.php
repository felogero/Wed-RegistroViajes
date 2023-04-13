<?php
require_once("layout/header.php");
?>
    <div >
        <h2>
            Tu Viaje
        </h2>
        <div class="container">
        <table class="tabla" method="get">
            <thead>
            <tr>
                <th>id</th>
                <th>Ida</th>
                <th>Vuelta</th>
                <th>Motivo</th>
                <th>Presupuesto</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Gasto Real</th>
                <th>tipo de Transporte</th>
                <th>N° de personas</th>
                <th>Accion</th>
            </tr>
            </thead>
            <tbody>
                <?php
                if(!empty($datos)):
                foreach($datos as $key => $value)
                    foreach($value as $v):?>
                <tr>
                    <td> <?php echo $v['idpaseo'] ?> </td>
                    <td> <?php echo $v['ida'] ?> </td>
                    <td> <?php echo $v['vuelta'] ?> </td>
                    <td> <?php echo $v['motivo'] ?> </td>
                    <td> <?php echo $v['presupuesto'] ?> </td>
                    <td> <?php echo $v['c_origen'] ?> </td>
                    <td> <?php echo $v['c_destino'] ?> </td>
                    <td> <?php echo $v['gasto_real'] ?> </td>
                    <td> <?php echo $v['transporte'] ?> </td>
                    <td> <?php echo $v['n_personas'] ?> </td>
                    <td class="b3">
                        <a  href="index.php?r=editar&
                           idpaseo=<?php echo $v ['idpaseo']?>"><i id="a" class="fa-solid fa-pen-to-square"></i></a>
                        <a href="index.php?r=eliminar&
                           idpaseo=<?php echo $v ['idpaseo']?>"><i id="b"  class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
                <?php endforeach ?>
                <?php else: ?>
                    <tr>
                    <td colspan="11"> AUN NO HAY REGISTROS </td>
                    </tr>
                    <?php endif ?>

            </tbody>
        </table>
        </div>
    </div>

<?php
require_once("layout/footer.php");