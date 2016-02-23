<?php

Config::set('site_name', 'Имя сайта');

Config::set('languages', array('ua', 'ru'));

Config::set('routes', array(
    'default' => '',
    'admin' => 'admin_',
));

Config::set('default_route', 'default');
Config::set('default_language', 'ru');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');