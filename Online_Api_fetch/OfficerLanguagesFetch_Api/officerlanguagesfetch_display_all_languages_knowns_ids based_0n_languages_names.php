<?php

  include('officerlanguagesfetch_db_config.php');

  $Languages_names = $_GET['Languages_names'];

  $sql = "SELECT Languages_Id FROM jse_cf_languages WHERE Languages_names = '".$Languages_names."' ";

  $res = mysqli_query($officerlanguages_connection,$sql);

  $result=array();

  while($row=mysqli_fetch_array($res))
  {
      array_push($result,array('Languages_Id'=>$row[0]));
  }

 echo (json_encode(array("result"=>$result)));

mysqli_close($officerlanguages_connection);

?>