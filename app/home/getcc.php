

<?php
include '../conn.php';
if(isset($_POST["id"]))
{
 $query = "SELECT * FROM log WHERE login = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
	 
 
 
  $data["kayy"] = urldecode($row["kay"]);
  
  
 
  
 }

 echo json_encode($data);
}
?>