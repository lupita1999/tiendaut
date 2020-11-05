<?php
    class Conexion{
        var $conn;

        function conectar(){
            $conn = null;
            try{
                $conn = new PDO('mysql:host=localhost;dbname=tiendaut', 'root', '');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //echo 'Se estableció la conexión <br> <br>';
            }
            catch(PDOException $e){
                die( print_r('Error conectando a la base de datos:' 
                    . $e->getMessage()));
           }
           return $conn;
        }

        function insertarUsuario($user, $nombre,  $correo, $pass){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $consulta = 'INSERT INTO usuario 
                        (usuario,contrasena, nombre, correo_e) /*contraseña cambiar por contrasena*/
                         VALUES (:user, :pass, :nom, :email)'; 

            $stmt = $con->prepare($consulta);
        
             $rows=$stmt->execute(array(':user'=>$user,
                                 ':nom'=>$nombre,
                                 ':email'=>$correo,
                                 ':pass'=>$pass));

    return $rows;
        }
    }

?>