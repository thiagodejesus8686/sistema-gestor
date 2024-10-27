<?php

    namespace Controller;

    use Controller\Main;

    class Costumers extends Main{

        public function __construct(){
            parent::__construct();
        }

        public function get(){
            for($i=0;$i<10;$i++){
                echo "<a href=\"\" class=\"folder\">
                    <i class=\"fa fa-folder-open\"></i>
                    <small>Cliente número 1</small>
                </a>";
            }
        }

    }