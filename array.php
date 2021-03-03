<?php
include("encabezado.php");

?>
<h1 class="text-success">ORDENAR VECTOR</h1>
    <fieldset>
        <legend>Tamaño de Vector </legend>
            <form method="post" action="array.php">
                <div class="col-sm-2">
                <input type="text" class="form-control is-valid" name="tam">
                </div>
                <input type="submit" class="btn btn-info" value="Gnenerar">
            </form>
    </fieldset>
    <br><br>
    <form method="post" action="ordenar.php">
        <div class="col-sm-2">
        <?php if(isset($_POST['tam'])){ ?>
        <?php for ($i=1; $i <= $_POST['tam'] ; $i++) { ?>
            <input type="text" class="form-control is-valid" name="array[]" placeholder="Valor"><br>
        <?php } ?>
        <?php } ?>
        
        <br><br>
        <input type="submit" class="btn btn-warning" value="Ordenar">
        </div>
    </form>
<?php
include("pie.php");
?>