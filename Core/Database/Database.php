<?php

namespace Core\Database;

use Core\Config\Config;

class Database{

    /**
     * Connexion ouverte à la Db
     *
     * @var object
     */
    protected $pdo;

    /**
     * nom de l'host
     *
     * @var string
     */
    private $dbHost;

    /**
     * nom d'utilisateur
     *
     * @var string
     */
    private $dbUser;

    /**
     * Password de connexion
     *
     * @var string
     */
    private $dbPassword;

    /**
     * Port de connexion
     *
     * @var string
     */
    private $dbPort;

    /**
     * nom de la Db
     *
     * @var string
     */
    private $dbName;

    /**
     * Constructeur / établit la connexion avec la Db
     */
    public function __construct(){
        $config = new Config();
        $config = $config->getConfig();
        $this->dbHost = $config["dbHost"];
        $this->dbPort = $config["dbPort"];
        $this->dbName = $config["dbName"];
        $this->dbUser = $config["dbUser"];
        $this->dbPassword = $config["dbPassword"];
        $this->pdo = new \PDO('mysql:host='. $this->dbHost . ':' . $this->dbPort . 
        ";dbname=" . $this->dbName , 
        $this->dbUser, 
        $this->dbPassword);
    }
}