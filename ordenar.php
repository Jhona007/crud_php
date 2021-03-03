<?php
include("encabezado.php");
$array = $_POST['array'];
$n = count($array);
sort($array);
?>
<h1 class="text-success">VECTOR ORDENADO </h1>
<br><br>

    <form method="post" action="ordenar.php">
    <div class="col-sm-2">
        <?php for ($i=0; $i < $n; $i++) { ?>
            <input type="text" class="form-control" name="a" value="<?php echo $array[$i]; ?>"><br>
        <?php } ?>
        </div>
        <br><br>
    </form>
<?php
include("pie.php");
?>