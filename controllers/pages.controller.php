<?php

class PagesController extends Controller{

    public function index(){
        $this->data['test_content'] = 'Hi bro!';
    }
    public function view(){
        $params = App::getRouter()->getParams();

        if(isset($params[0])){
            $alias = strtolower($params[0]);
            $this->data['content'] = "Алиса = {$alias}";
        }
    }
}