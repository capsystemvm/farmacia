<?php
if(isset($_POST['codUsAccess'])){
    // header('Location: crudPersona.php?mensaje=exito');
    $codUsAccess= $_POST['codUsAccess'];
    ?><input type="hidden" name="codUsAccess" value="<?php echo  $GLOBALS['codUsAccess'] ?>">
     <?php
    //     exit();
 }else{
     if(isset($_GET['codUsAccess'])){
         $codUsAccess= $_GET['codUsAccess'];
         ?><input type="hidden" name="codUsAccess" value="<?php echo  $GLOBALS['codUsAccess'] ?>">
          <?php
     }else{
         echo "error";
     }
 } 
//session_start();

$nombre = $_POST['login'];
$password = $_POST['pass'];

include_once 'model/conexion.php';
 

$sentencia = $bd->prepare("SELECT * FROM t_usuario WHERE Login = ? AND pass = ?;");  
$sentencia->execute([$nombre,$password]);

$resultado = $sentencia->fetch(PDO::FETCH_OBJ);
$idUser=$resultado->Id_User;

print_r($resultado);
if(!$resultado){ 
    header('Location: index.php?mensaje=error');
} 
else{ 
    include_once 'model/conexion.php';
    

    $sentencia = $bd->prepare("select a.nombre1, a.nombre2, a.Ap_Pat, a.Ap_Mat, b.Id_User from t_persona a, t_usuario b  where b.Id_User = ? AND a.CI = b.fk_CI;");
    $sentencia->execute([$idUser]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    
    ?>
    
<input method="GET" type="hidden" name="nombre"  >
    <?php
    header('Location: indexAdmin.php?mensaje=bienvenido&nombre='.urlencode($persona->nombre1." ".$persona->nombre2." ".$persona->Ap_Pat." ".$persona->Ap_Mat).'&us='.urlencode($persona->Id_User));
} 

?>
