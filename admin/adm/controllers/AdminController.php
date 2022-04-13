<?php
namespace adm\controllers;

use adm\core\ControllerAdmin;

class AdminController extends ControllerAdmin{
    
   public function index(){
      $dados["view"] = "admin";
      $this->load("template", $dados);
   } 
}