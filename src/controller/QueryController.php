<?php 

require_once(__DIR__."/../dao/ProdutoDAO.php");

class QueryController{
    public function index(){
        $prod = new ProdutoDAO();
        $produtos = $prod->consultar('2020-10-14', '2020-10-30', '%QUEIJO%');

        header('Content-Type: text/html');

        echo "<br><br><table>";
        echo "<thead>";
        echo "<tr><td>Data de Emissão</td> <td>Emitente Documento</td> <td>Descrição</td></tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach($produtos as $prod){
            echo "<tr><td>{$prod->getEmissaoData()}</td><td>{$prod->getEmitenteDocumento()}</td><td>{$prod->getDescricao()}</td></tr>";
        }

        echo "</tbody>";
        echo "</table>";
    }
}