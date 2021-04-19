<?php

  include('officercategoryfetch_db_config.php');

  $CategoryDesc = $_GET['CategoryDesc'];

  $sql = "SELECT CategoryCode FROM jse_cf_category WHERE CategoryDesc ='".$CategoryDesc."' ";

  $res = mysqli_query($officercategory_connection,$sql);

  $result=array();

  while($row=mysqli_fetch_array($res)){
      array_push($result,array('CategoryCode'=>$row[0]));
  }

 echo (json_encode(array("result"=>$result)));

mysqli_close($officercategory_connection);

?>