<?php
require "db_config.php";

session_start();
$cook_id = $_SESSION['client_id'];


$msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {


  	$filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];    
    $folder = "images/".$filename;
    $ph_no = $_POST['num'];
    $food_pref = $_POST['pref'];
          
    if($filename){
      $sql = "UPDATE client_details SET profile_pic = '$filename' WHERE client_id = $cook_id";
      $sql2 = "UPDATE client SET profile_pic = '$filename' WHERE client_id = $cook_id";
      mysqli_query($conn, $sql);
      mysqli_query($conn, $sql2);

      }
    if($ph_no){
      $sql = "UPDATE client_details SET ph_no = '$ph_no' WHERE client_id = $cook_id";
      mysqli_query($conn, $sql);
      }
    if($food_pref){
      $sql = "UPDATE client_details SET food_pref = '$food_pref' WHERE client_id = $cook_id";
      mysqli_query($conn, $sql);
      }
    

          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
      header('Location:client.php?upd=1');
  }