<?php 

class AdjustmentController{
    public function index(){

        if(!isset($_POST['salario'])) return 'O Salário não foi informado.';

        if(!is_float($_POST['salario'])) return 'O formato do valor do salário é inválido.';

        $salario = $_POST['salario'];

        switch($salario){
            case $salario < 3000:
                $salario += ($salario/100)*50;
                break;
            case $salario > 3000.01 && $salario <= 10000:
                $salario += ($salario/100)*20;
                break;
            default: 
                $salario += ($salario/100)*15;
        }

        return "O resultado é ".$salario;
    }
}