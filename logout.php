<?php
session_name('session_');
session_start();

         unset($_SESSION['Email']);
   		unset($_SESSION['Usuario']);
   		unset($_SESSION['Nombre']);
        unset($_SESSION['Apellido']);
   		unset($_SESSION['IS_LOGGED']);
		
           session_destroy();

           header('location: login.php?mensaje=Se ha desconectado del sistema');

?>