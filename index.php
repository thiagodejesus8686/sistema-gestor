<?php

    session_start();

    require "vendor/autoload.php";

    use Controller\Main;
    use Model\Md_auth;
    use Controller\Auth;

    $main=new Main;
    $mdAuth=new Md_auth;
    $auth=new Auth;

    $main->load("app/views/require/head");

        if($main->verifyUserAuthenticated()){
            if(filter_input(INPUT_GET,'auth')){
                if(filter_input(INPUT_GET,'auth')=="logout"){
                    $main->load("app/views/modules/auth/set/set.logout");
                }
            }else{
                if(filter_input(INPUT_GET,'app')){
                    switch(filter_input(INPUT_GET,'app')){
                        case "":
                            break;
                        default:
                            $main->load("app/views/pages/404");
                            break;
                    }
                }else{
                    $main->load("app/views/pages/home");
                }
            }
        }else{
            $main->load("app/views/modules/auth/index");
        }
    
    $main->load("app/views/require/footer");