<table class="table table-hover">
    <tr>
        <th>Productos</th>
        <th>PVP</th>
        <th></th>
    </tr>
    <?php
    foreach ($resultados as $result) {
        ?>
        <tr>
            <td>
                <?php echo $result["NOMBRE_CORTO"] ?>
            </td>
            <td>
                <?php echo $result["PVP"] ?><br>
            </td>
            <td>
                <!-- Formulario para editar el producto, se pasan por POST los datos -->
                <form method="post" action="./CONTROLADOR/controlador.php">
                    <button value="<?php echo $result["NOMBRE_CORTO"] ?>" name="nombreCorto">Editar</button>
                    <input type="hidden" value="<?php echo $familia ?>" name="familiaSelec">
                </form>
            </td>
        </tr>
        <?php
    }
    ?>