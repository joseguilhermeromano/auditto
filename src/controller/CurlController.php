<?php 

class CurlController{
    public function index(){
        $url = "https://auditto.com.br/solucoes/";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $html = curl_exec($ch);
        curl_close($ch);

        $dom = new DOMDocument;
        @$dom->loadHTML($html);
        $elementosComClasse = $dom->getElementsByTagName('*');
        $conteudo = '';

        foreach ($elementosComClasse as $elemento) {
            if ($elemento->getAttribute('class') == 'et_pb_blurb_description') {
                $conteudo = $dom->saveHTML($elemento);
                break;
            }
        }

        $isTextoEsquerdo = strpos($html, 'et_pb_column_2') !== false;
        $isTextoDireito = strpos($html, 'et_pb_column_4') !== false;

        $numPalavras = str_word_count(strip_tags($conteudo));

        $conteudo = utf8_decode($conteudo);

        $textoReverso = strrev(strip_tags($conteudo));

        $textoReverso = utf8_encode($textoReverso);

        $resposta =  [
            'lado' => ($isTextoEsquerdo ? 'esquerdo' : ($isTextoDireito ? 'direito' : 'centro')),
            'numPalavras' => $numPalavras,
            'textoReverso' => $textoReverso
        ];

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($resposta);
    }
}