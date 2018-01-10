<?php
require_once("db/db.php");

require_once("controllers/personas_controller.php");
require_once("controllers/coches_controller.php");

if (isset($_GET['controller']) && isset($_GET['action']) ) {

    if ($_GET['controller'] == "personas") {

         if ($_GET['action'] == "add") {
           $controller = new personas_controller();
           $controller->add();
         }

         if ($_GET['action'] == "insert") {
           $controller = new personas_controller();
           $controller->insert();
         }

         if ($_GET['action'] == "delete") {
           $controller = new personas_controller();
           $controller->delete();
         }
         if ($_GET['action'] == "ordpersona") {
           $controller = new personas_controller();
           $controller->ordpersona();
         }
         if ($_GET['action'] == "ordedades") {
           $controller = new personas_controller();
           $controller->ordedades();
         }

    }
    if ($_GET['controller'] == "coches") {

      if ($_GET['action'] == "view") {
        $controller = new coches_controller();
        $controller->view();
      }

      if ($_GET['action'] == "add") {
        $controller = new coches_controller();
        $controller->add();
      }

      if ($_GET['action'] == "insert") {
        $controller = new coches_controller();
        $controller->insert();
      }

      if ($_GET['action'] == "delete") {
        $controller = new coches_controller();
        $controller->delete();
      }

      if ($_GET['action'] == "ordmarca") {
        $controller = new coches_controller();
        $controller->ordmarca();
      }

    }

  /*  if ($_GET['controller'] == "log") {

      if ($_GET['action'] == "login") {
        $controller = new coches_controller();
        $controller->view();
      }
    }*/

} else {
   $controller = new personas_controller();
   $controller->view();
  /* $controller = new personas_controller();
	session_start();
	if (isset($_SESSION["user"])) {
		include '$controller->view();';
	}else{
		include 'login_view.php';
	}
*/
Falta mirar como se hace el login

}
?>
