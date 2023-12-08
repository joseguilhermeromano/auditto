<?php

require_once(__DIR__."/../model/Produto.php");

class ProdutoDAO{

    private $dbDriver;
    private $dbName;
    private $dbHost;
    private $dbUser;
    private $dbPass;


    public function __construct(){
        $env = parse_ini_file(__DIR__."/../../.env");
        $this->dbDriver = $env['DB_DRIVER'];
        $this->dbName = $env['DB_NAME'];
        $this->dbHost = $env['DB_HOST'];
        $this->dbUser = $env['DB_USER'];
        $this->dbPass = $env['DB_PASS'];
    }

    public function consultar($dataInicio, $dataFinal, $prodExceto)
    {
        $conexao = new PDO("{$this->dbDriver}:dbname={$this->dbName}; host={$this->dbHost}"
                            , $this->dbUser, $this->dbPass);

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