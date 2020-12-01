<?php

  require_once('function/frontend.php');

  $page_content->getIndexHeader();
  $page_content->getSection('banner');
  $page_content->getSection('tranding');
  $page_content->getSection('blogwithsidebar');
  $page_content->getSection('featurepost');
  $page_content->getFooter();
 ?>
