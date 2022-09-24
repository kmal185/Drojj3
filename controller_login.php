<?php
    require_once('usuario.php');
    require_once('crud_usuario.php');
    require_once('conexion.php');

    // inicio de sesion
    session_start();

    $usuario=new Usuario();
    $crud=new CrudUsuario();
    //verifica si la variable registrarse esta definida
//se da que esta definida cuando el usuario se loguea, ya que la envia en la petición 
    if (isset($_POST['registrarse'])) {
        $usuario->setNombre($_POST['usuario']);
        $usuario->setClave($_POST['pas']);
        if ($crud->buscarUsuario($_POST['usuario'])) {
            $crud->insertar($usuario);
            header('Location: index.php');
        }else{
            header('Location: error_p.php?mensaje=El nombre del usuario ya existe');
        }

    }elseif (isset($_POST['entrar'])) { //verifica si la variable entrar esta definida
        $usuario=$crud->obtenerUsuario($_POST['usuario'],$_POST['pas']);
        //si el id del objeto retornado no es null, quiere decir que no encontró un regsitro en a base 
        if ($usuario->getId()!=NULL) {
            $_SESSION['usuario']=$usuario; // si el usuario se encuentra, crea la sesión de usuario
            header('Location: cuenta.php'); // envia la página que inicia el usuario
        }else{
            header('Location: error.php?mensaje=Tu nombre de usuario o clave son incorrectos');
            //cuando los datos son incorrectos envía a la página de error
        }
    }elseif(isset($_POST['salir'])){ // cuando presiona el boton salir 
            header('Location: index.php');
            unset($_SESSION['usuario']); //destruye la sesión
    }
?>
