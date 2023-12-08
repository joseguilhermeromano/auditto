<?php

class ClientController{
    public function index(){
        header('Content-Type: application/json; charset=utf-8');

        $msg = ["msg" => "Dados recebidos com sucesso (Nome: {$_POST['name']} / Sobrenome: {$_POST['lastName']})"];

        echo json_encode($msg);
    }
}