<?php
  if($_POST["action"] == "delete")
    $connect = mysqli_connect("localhost", "id8683266_ra332956", "webhostDB", "id8683266_parksmith");
     {
      $query = "DELETE FROM tbl_images WHERE id = '".$_POST["image_id"]."'";
      if(mysqli_query($connect, $query))
      {
       echo 'Image Deleted from Database';
      }
     }
?>
