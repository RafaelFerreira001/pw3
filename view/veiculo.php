<?php
class ViewVeiculo{
    private $retorno = [];

    private function limparRetorno(){
        $this->retorno["result"] = false;
        $this->retorno["dados"] = [];
        $this->retorno["itens"] = 0;
        unset($this->retorno['info']);
    }

    public function listarVeiculos($veiculos){
        $this->limparRetorno();
        if($veiculos){
            $this->retorno["result"] = true;
            $this->retorno["dados"] = $veiculos;
            $this->retorno["itens"] = count($veiculos);
            http_response_code(200);
        }
        else{
            http_response_code(404);
            $this->retorno['info'] = "Nenhum resultado correspondente para esta consulta.";
        }
        echo json_encode($this->retorno);
    }
    public function listarVeiculosID($veiculos){
        $this->limparRetorno();
        if($veiculos){
            $this->retorno["result"] = true;
            $this->retorno["dados"] = $veiculos;
            $this->retorno["itens"] = 1;
            http_response_code(200);
        }
        else{
            http_response_code(404);
            $this->retorno['info'] = "Nenhum resultado correspondente para esta consulta.";
        }
        echo json_encode($this->retorno);
    }
}
