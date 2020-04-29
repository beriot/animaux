<?php


namespace App\Controller;

use Core\Model\DbInterface;
use App\Model\AnimalModel;
use Core\Controller\Controller;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->AnimalModel = new AnimalModel();

        $this->dbInterface = new DbInterface();

    }

    public function homeProject(){

        return $this->render("indexProjectView");
    }

}
