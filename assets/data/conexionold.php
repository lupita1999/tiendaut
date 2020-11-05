
<?
try {
$con=new PDO('mysqul:host=localhost;dbname=tiendaut',
'root',
'');
$con->setAttribute(PDO::ART_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo 'Conectado a la base de datos <br><br>';
/*
$stmt=$con->prepare('SELECT nombre FROM usuario');
$stmt->execute();
while($datos=$stmt->fetch(){
echo 'Nombre:'. $datos[0]. '<br>';
}
*/
$user='Juan';
$stmt=$con->prepare('SELECT nombre,correo_e FROM usuario WHERE usuario WHERE usuario=:usuario');
$stmt->bindParam(':usuario',$user, PDO::PARAM_STR);
$stmt->execute();
//$stmt->execute(array(':usuario'=$user));
/*
while($datos=$stmt->fetch() ){
echo 'Nombre:'.$datos[0].'<br>'.'Correo:'.$datos[1];

}*/
// Inserccion de un registro 
$stmt= $con->prepare('INSERT INTO usuario(usuario, contrasena,nombre,correo_e)

$rows=$stmt->execute(array(':user'=>$user,
':pass'=>$pass
':nom'=>$nombre,
':mail'=>$correo));
if($rows==1){
echo'Inserción correcta';
}*/
//Modificacion de un registro
$stmt=$con->prepare('UPDATE usuario SET usuario=:user WHERE nombre=:nom'),
$rows=$stmt->execute(array('user'=>$nombre));
if($rows > o){
echo'Modificación correcta';
}*/
//Borrado de un registro
$stmt=$con->prepare('DELETE FROM usuario WHERE usuario=:user');
$rows=$stmt->execute(array(':user'=>$user));

if($rows > 0){
echo 'Borrado correcto';
}
}
catch(PDOException $e){
die('Error conectado con la base de datos:'
.$e->getMessage());
}
?>

