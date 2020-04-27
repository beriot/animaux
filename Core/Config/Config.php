<?php

namespace Core\Config;

class Config
{

    public function __construct(){
        $this->config = [
            'dbHost' => 'localhost',
            'dbPort' => '3308',
            'dbName' => 'animaux',
            'dbUser' =>  'root',
            'dbPassword' => ''
        ];
    }

    public function getConfig(){
        return $this->config;
    }
    
}
