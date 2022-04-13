<?php
namespace adm\core;

class ControllerAdmin{
     public function load($viewName, $viewData=array()){
       extract($viewData); 
       include "adm/views/" . $viewName .".php";
   }
}
