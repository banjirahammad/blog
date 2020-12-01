<?php
  class pageContent{
    public function GetIndexHeader(){
      require_once('inc/index_header.php');
    }

    public function GetAllPageHeader(){
      require_once('inc/all_header.php');
    }
    public function getSection($section){
      require_once 'inc/'.$section.'.php';
    }







    public function GetFooter(){
      require_once('inc/footer.php');
    }

  }
