<?php

  include('officergenderfetch_db_function.php');

  $Gender_name = $_GET['Gender_name'];

  $sql = "SELECT Gender_Id FROM jse_cf_gender WHERE Gender_name = '".$Gender_name."' ";

  $res = mysqli_query($con,$sql);

  $result=array();

  while($row=mysqli_fetch_array($res))
  {
      array_push($result,array('Gender_Id'=>$row[0]));
  }

 echo (json_encode(array("result"=>$result)));

mysqli_close($con);

?>