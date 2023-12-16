<?php 
require_once("../../include/initialize.php");
 if(!isset($_SESSION['ADMIN_USERID'])){
    redirect(web_root."admin/index.php");
  }

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$title="Change Banner"; 
$header=$view;

switch($view) {
    case '1' :
        // $title="Home"; 
    // $content='home.php'; 
    if ($_SESSION['ADMIN_ROLE']=='Administrator') {
        # code... 

      redirect('meals/');

    } 
    break;
    default :
        $content = 'view.php';
}
require_once ("../theme/templates.php");
?>