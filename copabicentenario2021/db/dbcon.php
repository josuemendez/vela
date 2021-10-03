
<?php
    // Parametros a configurar para la conexion de la base de datos
    $host = "velayucatanorg.fatcowmysql.com";    // sera el valor de nuestra BD
    $basededatos = "fpkvpsnn_regata";    // sera el valor de nuestra BD
    $usuariodb = "fpkvpsnn_regata";    // sera el valor de nuestra BD
    $clavedb = "Regata2021";    // sera el valor de nuestra BD

    /*$host = "localhost";    // sera el valor de nuestra BD
    $basededatos = "tierraoroDB";    // sera el valor de nuestra BD
    $usuariodb = "root";    // sera el valor de nuestra BD
    $clavedb = "";    // sera el valor de nuestra BD */

    //Lista de Tablas
    $tabla_usuarios = "pagos"; 	   // tabla de pagos

    

    //error_reporting(0); //No me muestra errores
    
    $conexion = new mysqli($host, $usuariodb, $clavedb, $basededatos);
    $conexion->set_charset("utf8");


    if ($conexion->connect_errno) {
        echo "Nuestro sitio experimenta fallos....";
        exit();
    }

?>


<?php 
/*
$link = mysql_connect('velayucatanorg.fatcowmysql.com', 'fpkvpsnn_regata', 'Regata2021'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 
mysql_select_db(fpkvpsnn_regata); 
*/
?> 

<?php
/*
$conexion = mysqli_connect('localhost','fpkvpsnn_tierra','Tierraoro2020*','fpkvpsnn_tierraoroDB');
$conexion->set_charset("utf8");
if (!$conexion) {
    die("Ocurrio un error en la conexión" . mysqli_connect_error());
}*/
?>


