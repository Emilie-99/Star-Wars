<?php

/** Function that returns an array from a query result
 * @param res : query result
 * @param col_id : id of the column, to instanciate the array with the id keys
 */
function getArrayFromQueryResult($res, $col_id=null){
  $array_res = [];
  $i = 0;
  while ($v = $res->fetch_assoc()){
    $key = ($col_id==null ? $i : $v[$col_id]);
    $array_res[$v[$col_id]] = $v;
    $i++;
  }
  return $array_res;
}
?>