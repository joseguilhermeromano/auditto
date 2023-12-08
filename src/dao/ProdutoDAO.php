<?php

require_once(__DIR__."/../model/Produto.php");

class ProdutoDAO{

    public function __construct(){
    }

    public function consultar($dataInicio, $dataFinal, $prodExceto)
    {
        $conexao = new PDO("mysql:dbname=auditto; host=db"
                            , "root", "secret");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM Produtos 
                WHERE emissaoData BETWEEN date(:data_inicio) AND date(:data_final) 
                AND descricao NOT LIKE :prod_exceto ";

        $result = $conexao->prepare($sql);
        $result->bindParam(":data_inicio", $dataInicio, PDO::PARAM_STR);
        $result->bindParam(":data_final", $dataFinal, PDO::PARAM_STR);
        $result->bindParam(":prod_exceto", $prodExceto, PDO::PARAM_STR);
        $result->execute();
        $list = $result->fetchAll();
        $produtos = [];

        if(!empty($list)){
            for($i = 0; $i<= count($list); $i++){

                if(!isset($list[$i])) continue;

                $prod = new Produto();
                $prod->setEmissaoData($list[$i]['emissaoData']);
                $prod->setEmitenteDocumento($list[$i]['emitenteDocumento']);
                $prod->setDescricao($list[$i]['descricao']);

                array_push($produtos, $prod);
            }
        }

        return $produtos;
    }
}