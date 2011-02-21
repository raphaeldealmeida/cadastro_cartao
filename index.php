<?php
session_start();

require 'lib/functions.php';

if(isset($_GET['page'])){
  $page = $_GET['page'];

  $action =$page.'Action';
  
  if(function_exists($action)){
    $action();  
  }else{
    redirect('404.php');
  }  
}
