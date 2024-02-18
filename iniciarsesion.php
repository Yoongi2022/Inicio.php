<?php
session_start();
    include('conexion.php');

    if(isset($_POST['Usuario']) && isset($_POST['Clave'])){
        function validate($data){
            $data= trim($data);
            $data= stripslashes($data);
            $data= htmlspecialchars($data);
            return $data;
        }

        $Usuario = validate($_POST['Usuario']);
        $Clave = validate($_POST['Clave']);

        if(empty($Usuario)){
            header("Location: index.php?error=El correo es requerido");
            exit();
        }elseif (empty($Clave)){
            header("Location: index.php?error=La contraseña es requerida");
            exit();
        }else{
            //$Clave = md5($Clave);
            $Sql = "SELECT * FROM users WHERE Usuario= '$Usuario' AND Clave='$Clave'";
            $result = mysqli_query($conexion. $Sql);

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['Usuario'] === $Usuario && $row['Clave'] === $Clave){
                    $_SESSION['Usuario'] = $row['Usuario'];
                    header("Location:inicio.php");
                    exit();
                }else{
                    header("Location: index.php?error=El correo o la contraseña son incorrectos");
                    exit();
                }
            }else{
                header("Location: index.php?error=El correo o la contraseña son incorrectos");
                    exit();
            }
        }
    } else {
        header("Location: inicio.php");
                    exit();
    }

    