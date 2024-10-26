<?php

    use Controller\auth;
    
    //receber os dados via POST
    if($_SERVER['REQUEST_METHOD']=="POST"){
        //chamar a classe
        $auth=new Auth;
        //obter os dados
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $auth->validateData($user,$pass);

    }
