<?php
$resultados = get_familias();
?>
<h2>Selecciona un producto</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"><!-- COMO PASAR LOS VALUE -->
    <label for="producto">Familia:</label>
    <select name="familia" id="familia-form">
        <?php
        foreach ($resultados as $result) {
            $cod = $result["COD"];
            $nombre = $result["NOMBRE"];
            echo "<option value=\"$cod\">$nombre</option>";
        }
        ;
        ?>
    </select>
    <br><br>
    <input type="submit" value="Mostrar" name="mostrarFamilia">
    <br><br>
</form>