<?php
require_once ("../../include/initialize.php");
	  if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'update-banner' :
	doUpdateBanner();
	break;
	}
    function doUpdateBanner(){
        $errofile = $_FILES['photo']['error'];
        $type = $_FILES['photo']['type'];
        $temp = $_FILES['photo']['tmp_name'];
        $myfile =$_FILES['photo']['name'];
         $location="photos/".$myfile;
    if ( $errofile > 0) {
            message("No Image Selected!", "error");
            redirect("index.php?view=view&id=". $_GET['id']);
    }else{
 
            @$file=$_FILES['photo']['tmp_name'];
            @$image= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
            @$image_name= addslashes($_FILES['photo']['name']); 
            @$image_size= getimagesize($_FILES['photo']['tmp_name']);

        if ($image_size==FALSE ) {
            message("Uploaded file is not an image!", "error");
            redirect("admin/banner/index.php?view=view&id=". $_GET['id']);
        }else{
                if (isset($_GET['view'])) {
                    # code...
                    message("Banner has been updated!", "success");
                    redirect("index.php?view=view");
                }else{ 
                    message("Banner has been updated!", "success");
                    redirect("index.php");
                }
                //uploading the file
                move_uploaded_file($temp,"photos/" . $myfile);
                    $banner = New banner();
                    $banner->bannerlocation 			= $location;
                    $banner->doUpdateBanner();
                    redirect(web_root."admin/banner/index.php?view=view&id=". $_GET['id']);
                }
        }
    }
    
?>