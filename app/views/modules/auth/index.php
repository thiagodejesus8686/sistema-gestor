<?php

    //echo "user".uniqid();
    //echo md5("thiago.jesus123");

    if(filter_input(INPUT_GET,"auth")){
        $url=filter_input(INPUT_GET,"auth");
        switch ($url) {
            case 'validate':
                $this->load("app/views/modules/auth/set/set.validate");
                break;
            case 'logout':
                $this->load("app/views/modules/auth/set/set.logout");
                break;
        }
    }else{
        $this->load("app/views/modules/auth/pages/auth.form");
    }