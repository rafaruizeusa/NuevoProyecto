<?php
if ($resultados) {
    ?>
    <!-- Formulario para editar el producto -->
    <form action="./CONTROLADOR/controlador.php" method="post">
        <p>
            <label for="nombreCorto">Nombre Corto:</label>
            <input type="text" name="nombreCorto" value="<?php echo htmlspecialchars($nombreCorto) ?>">
        </p>

        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo htmlspecialchars($resultados['NOMBRE']) ?>">
        </p>

        <p>
            <label for="descripcion">Descripción:</label><br>
            <textarea name="descripcion" rows="4"
                cols="50"><?php echo htmlspecialchars($resultados['DESCRIPCION']) ?></textarea>
        </p>

        <p>
            <label for="pvp">PVP:</label>
            <input type="text" name="pvp" value="<?php echo $resultados['PVP'] ?>">
        </p>
        <p>
            <!-- Botón para actualizar el producto -->
            <button id="actualizar" name="nombreEnDB"
                value="<?php echo htmlspecialchars($nombreCorto) ?>">Actualizar</button>
        </p>
    </form>

    <!-- Formulario para cancelar y volver al listado -->
    <form action="./CONTROLADOR/controlador.php">
        <button id="cancelar">Cancelar</button>
    </form>
    <?php
}
?>