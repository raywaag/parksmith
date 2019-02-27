<?php
//action.php
if(isset($_POST["action"]))
{
include('db_sqli_connect.php');
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM img_gallery ORDER BY id DESC";
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-bordered table-striped">
    <tr>
     <th width="70%">Image</th>
     <th width="10%">Remove</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr class="responsive-table">
     <td>
      <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="60" width="75" />
     </td>
     <td><button type="button" name="delete" class="btn orange darken-4 delete" id="'.$row["id"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "INSERT INTO img_gallery(name) VALUES ('$file')";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Inserted into Database';
  }
 }

 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM img_gallery WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Deleted from Database';
  }
 }
}
?>
