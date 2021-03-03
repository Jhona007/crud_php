<?php
$conexion= pg_connect("host='localhost' dbname=Incos port=5432 user=postgres password=") 
or die ("Error de Conexion".pg_last_error());
?>