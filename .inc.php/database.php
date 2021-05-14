<?php

    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_db = 'Starwars';
    $db_port = 8889;

// $db_host = 'localhost';
// $db_user = 'grp_7_1';
// $db_password = 'iiPh8Riedi';
// $db_db = 'bdd_7_1';
// $db_port = 8889;

$mysqli = new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db
);

if ($mysqli->connect_error) {
  echo 'Errno: '.$mysqli->connect_errno;
  echo '<br>';
  echo 'Error: '.$mysqli->connect_error;
  exit();
}


// /** Function that returns an array from a query result
//  * @param res : query result
//  * @param col_id : id of the column, to instanciate the array with the id keys
//  */
// function getArrayFromQueryResult($res, $col_id=null){
//   $array_res = [];
//   $i = 0;
//   while ($v = $res->fetch_assoc()){
//     $key = ($col_id==null ? $i : $v[$col_id]);
//     $array_res[$v[$col_id]] = $v;
//     $i++;
//   }
//   return $array_res;
// }

/* $mysqli->close();*/
?>