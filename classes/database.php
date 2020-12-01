<?php

  class database{

    public $host = host;
    public $user = user;
    public $pass = pass;
    public $dbname = dbname;
    public $conn;
    public $error;

    public function __construct(){
      $this->connectDb();
    }

    public function connectDb(){

      $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
      if (!$this->conn) {
        $this->error = "Connection failed".$this->conn->connect_error;
        return FALSE;
      }

    }

    public function select($query){
      $result = $this->conn->query($query) or die($this->conn->error.__LINE__);
      // print_r($result);
      if($result->num_rows > 0){
        return $result;
      }
      else {
        return FALSE;
      }
    }

    public function insert($query){

      $insert = $this->conn->query($query) or die($this->conn->error.__LINE__);
      if ($insert) {
        return $insert;
      }
      else {
        return FALSE;
      }

    }
    public function delete($query){

      $result = $this->conn->query($query) or die($this->conn->error.__LINE__);
      if ($result) {
        return $result;
      }
      else {
        return FALSE;
      }

    }

  }
