<?php

require_once(ROOT.DS.'config'.DS.'config.php');

function __autoload($class_name){
    $lib_patch = ROOT.DS.'lib'.DS.strtolower($class_name).'.class.php';
    $controllers_patch = ROOT.DS.'controllers'.DS.str_replace('controller', '', strtolower($class_name)).'.controller.php';
    $model_patch = ROOT.DS.'models'.DS.strtolower($class_name).'.php';

    if(file_exists($lib_patch)){
        require_once($lib_patch);
    } elseif (file_exists($controllers_patch)){
        require_once($controllers_patch);
    } elseif(file_exists($model_patch)){
        require_once($model_patch);
    }else{
        throw new Exception('Ошибка в подключении class'.$class_name);
    }

}