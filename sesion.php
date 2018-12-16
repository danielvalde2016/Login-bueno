<?php
include_once 'users/Usuarios.php';

/**
* sesion
*/
class Sesion
{
	public function comprobarUsuario($usuario, $password)
	{
		if ($usuario == $_SESSION['usuario']) {
			$usuario1 = Usuarios::comparar($_SESSION['administrador'], $_SESSION['idusuario'], $_SESSION['nombre'], $_SESSION['apellido'], $_SESSION['email'], $_SESSION['direccion'], $_SESSION['usuario'], $_SESSION['clave']);
			echo $usuario1;
		} else {
			echo "<p>No se ha podido iniciar sesion.</p>";
		}
	}
}
?>