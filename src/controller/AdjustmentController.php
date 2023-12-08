<?php 

class AdjustmentController{
    public function index(){

        header('Content-Type: text/html');

        if(!isset($_POST['salario'])) echo 'O Salário não foi informado.';

        $salario = str_replace(".", "", $_POST['salario']);

        $salario = floatval(str_replace(",", ".", $salario));

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

        $salario = round($salario, 2);


        echo json_encode("O Reajuste do Salário ficará R$ ".$salario);
    }
}