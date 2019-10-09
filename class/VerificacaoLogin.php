<?php

class VerificacaoLogin 
{
    public function  __construct()
    {
        session_start();

        if(!isset($_SESSION['nome']) and !isset($_SESSION['senha']))
            header('location: ../views/index.php');
    }
}
