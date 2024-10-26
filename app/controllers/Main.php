<?php

    namespace Controller;

    class Main{

        private $url;

        public function __construct(){
            $this->url="http://localhost:8282/";
        }

        public function load($path){
            $path=str_replace(".php","",$path);
            //fazer uma busca na pasta para encontrar o arquivo
            $dir=str_replace(basename($path),"",$path);
            $dir=dir($dir);
            try{
                $exits=false;
                while($row = $dir->read()){
                    if(array_diff([$row],[".",".."])){
                        if(in_array(basename($path.".php"),[$row])){
                            $exits=true;
                        }
                    }
                }
                if($exits){
                    include_once $path.".php";
                }else{
                    $this->showPageError();
                }

            }catch(\Error $e) {
                echo $e->getMessage();
            }

        }

        public function showPageError(){
            include_once "app/views/pages/404.php";
        }

        public function baseUrl($b=null){
            return $b!=null ? "./{$b}" : "./";
        }

        public function verifyUserAuthenticated(){
            if(!filter_input(INPUT_GET,"auth")){
                return isset($_SESSION[md5('usuario-logado-id')]) ?? true;
            }
        }

        public function flashMessage($msg){
            //mensagens instantâneas
            $_SESSION['flashMessage']=$msg;
        }

        public function removeFlashMessage(){
            if(isset($_SESSION['flashMessage'])){
                unset($_SESSION['flashMessage']);
            }
        }


    }