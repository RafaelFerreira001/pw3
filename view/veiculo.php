<?php
class ViewVeiculo{
    
    public function listarVeiculos($veiculos){
        if($veiculos){
            $retorno["result"] = true;
            $retorno["dados"] = $veiculos;
            $retorno["itens"] = count($veiculos);
            http_response_code(200);
        }
        else{
            http_response_code(404);
            $retorno["result"] = false;
            $retorno["dados"] = $veiculos;
            $retorno["itens"] = count($veiculos);
            $retorno['info'] = "Nenhum resultado correspondente para esta consulta.";
        }
        echo json_encode($retorno);
    }
    public function listarVeiculosID($veiculo){
        if($veiculo){
            $retorno["result"] = true;
            $retorno["veiculo"] = $veiculo;
            $retorno["itens"] = 1;
            http_response_code(200);
        }
        else{
            http_response_code(404);
            $retorno["result"] = false;
            $retorno["veiculo"] = '';
            $retorno["itens"] = 0;
            $retorno['info'] = "Nenhum resultado correspondente para esta consulta.";
        }
        echo json_encode($retorno);
    }
}
