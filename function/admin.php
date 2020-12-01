<?php

  /***************************************************************************
  this page maintain all the function for the Admin
  ***************************************************************************/

  require_once('../config/config.php');
  require_once('../classes/database.php');
  require_once('../classes/pageContent.php');
  require_once('../classes/session.php');

  //object of  page content class
  $page_content = new pageContent();


  //object of database connection class
  $db = new database();
