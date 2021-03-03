<?php
include("encabezado.php");
if(isset($_POST["gen"])){
    $a= $_POST["a"];
    $c=0;
    $b=1;
    $n=1;
    $serie="";
    for ($i=0; $i < $a; $i++) { 
        if ($c == $b) {
            $n++;
            $serie=$serie." ".$n;
            $c=1;
            $b++;
        }else{
            $serie=$serie." ".$n;
            $c++;
        }
    }
}
?>
<h1 class="text-success">SERIE DE NUMEROS</h1>
<form method="post" action="serie.php">

<input type="hidden" name="iden" value="<?=$id?>">

    <div class="form-group">
    <label for="id">Ingrese limite de la Serie</label>
    <input type="number" class="form-control" name="a" required>
    </div>

    <input type="submit" class="btn btn-warning" name="gen" value="Generar">
    <br><br>
    <input type="text" value="<?=$serie?>" class="form-control" name="ver">
    
    </form>

<?php
include("pie.php");
?>