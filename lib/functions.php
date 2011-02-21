<?php

function is_logged(){
  return isset($_SESSION['user_name']);
}

function redirect($location){
  header("Location: $location");
}

function render($view){
  
  include "view/layout.php";
}

function loginAction(){
  unset($_SESSION['user_name']);
  
  if(isset($_POST)){  
    $_SESSION['user_name'] = 'cluble';
    $_SESSION['empresa_id'] = '1';
    redirect('?page=list'); 
  }  
  include 'view/login.php';
}

function listAction(){
  render('list');
}
