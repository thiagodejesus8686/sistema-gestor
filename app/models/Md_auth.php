<?php

    namespace Model;
    use Controller\Main;

    class Md_auth extends Main{

        protected $database;

        public function __construct(){
            parent::__construct();
            $this->database="./app/database/auth/users.json";
        }

        public function get($data){
            $fgc=file_get_contents($this->database);
            $jsonDecode=json_decode($fgc);
            foreach($jsonDecode as $key => $value){
                if($value->user==$data[0] && $value->pass==md5($data[1])){
                    $_SESSION[md5('usuario-logado-id')]=$value->id;
                    $_SESSION[md5('usuario-logado-user')]=$value->user;
                    $_SESSION[md5('usuario-logado-dateSignIn')]=$value->dateSignIn;
                    $_SESSION[md5('usuario-logado-profile')]=$value->profile;
                    $_SESSION[md5('usuario-logado-status')]=$value->status;
                    return true;
                }
            }
        }

        public function logout(){
            unset($_SESSION[md5('usuario-logado-id')]);
            unset($_SESSION[md5('usuario-logado-user')]);
            unset($_SESSION[md5('usuario-logado-dateSignIn')]);
            unset($_SESSION[md5('usuario-logado-profile')]);
            unset($_SESSION[md5('usuario-logado-status')]);
            return true;
        }

    }