<?php

    namespace Controller;

    use Controller\Main;
    use Model\Md_auth;

    class Auth extends Main{

        private $mdAuth;

        public function __construct(){
            parent::__construct();
            $this->mdAuth=new Md_auth;
        }

        public function validateData($user,$pass){
            try{
                if($this->mdAuth->get([$user,$pass])){
                    $this->flashMessage("Usuário logado com sucesso!");
                    $this->load("app/views/pages/success");
                }else{
                    $this->flashMessage("Erro ao tentar logar!");
                    $this->load("app/views/pages/error");
                }
            }catch(\Error $e){
                echo $e->getMessage();
            }
        }

        public function logout(){
            if($this->mdAuth->logout()){
                $this->flashMessage("Usuário foi desconectado!");
                $this->load("app/views/pages/success");
            }
        }

    }