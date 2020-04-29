<?php

namespace App\Controller;
use App\Model\UserModel;
use Core\Controller\Controller;
use Core\Manager\PasswordEncoderManager;
use Core\Model\DbInterface;

class UserController extends Controller{

    public function __construct()
    {
        $this->model = new UserModel();
        $this->interface = new DbInterface();
        $this->encoder = new PasswordEncoderManager();
    }

    public function signup(){
        $message = "";
        try {
            if(!empty($_POST) && !empty($_POST["username"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"])
                && !empty($_POST["adresse"]) && !empty($_POST["postal"]) && !empty($_POST["mail"])
                && !empty($_POST["telephone"]) && !empty($_POST["role"])){
                $_POST["password"] = $this->encoder->passwordEncode($_POST["password"]);


                $this->interface->save($_POST, 'user');
                return $this->redirectToRoute('home');
            }else {
                $message = "Il manque le username";
            }
        } catch (\Throwable $th) {
            $message = "Une erreur s'est produite ...";
        }

        return $this->render("user/signup", ["message" => $message]);
    }

    public function login(){
        if(!empty($_POST)){
            $user = $this->model->findOneBy(['username' => $_POST["username"]]);
            if (!is_null($user)){
                $connected = $this->encoder->passwordVerify($_POST["password"], $user->password);
                if($connected){
                    $_SESSION["user"] = $user;
                }
                return $this->redirectToRoute("home");
            }
        }
        return $this->render('user/login');

    }

    public function logout(){
        session_destroy();
        return $this->redirectToRoute("home");

    }
}