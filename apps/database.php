<?php 
 /**
  * database connection
  */
  function connector(){
      return new mysqli(HOST, USER, PASS, DB);
  }

  /**
   * data create
   */
  function create($sql){
    return connector()-> query($sql);
  }

  /**
   * data show
   */
  function all($table, $dst='DESC'){
    return connector()->query("SELECT * FROM {$table} ORDER BY id {$dst}");
  }


?>