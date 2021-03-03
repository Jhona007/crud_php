<?php
include("encabezado.php");
if(isset($_POST["ver"])){
    $a= $_POST["a"];
    $b= $_POST["b"];
    $c= $_POST["c"];
    $may = max($a,$b,$c);
    $res = "El numero mayor es : ".$may;
}
?>
<h1 class="text-success">VERIFICAR NUMERO MAYOR</h1>
<form method="post" action="mayor.php">

<input type="hidden" name="iden" value="<?=$id?>">

    <div class="form-group">
    <label for="id">Primer Numero</label>
    <input type="number" class="form-control" name="a" required>
    </div>

    <div class="form-group">
    <label for="nombre">Segundo Numero </label>
    <input type="number" class="form-control" name="b" required>
    </div>

    <div class="form-group">
    <label for="email">Tercer Numero</label>
    <input type="number" class="form-control" name="c" required>
    </div>

    <button type="submit" class="btn btn-warning" name="ver" >VERIFICAR</button>
    <br><br>
    <input type="text" value="<?=$res?>" class="form-control" name="res">
    
    </form>

<?php
include("pie.php");
?>