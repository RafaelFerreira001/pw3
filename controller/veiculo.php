<?php
require_once 'model/Veiculo.php';
require_once 'view/Veiculo.php';
$veiculo = new Veiculo();
$viewVeiculo = new ViewVeiculo();

array_shift($url);
switch($method){    
    case "GET":{
        if(count($url)){
            if($url[0] == "modelo"){
                $veiculos = $veiculo->consultar(@$url[1]);
                $viewVeiculo->listarVeiculos($veiculos);
            }
            else if($url[0] == "id"){
                $id = @$url[1];
                $veiculos = $veiculo->consultarPorId($id);
                $viewVeiculo ->listarVeiculosID($veiculos);
            }
        }
        else{
            $veiculos = $veiculo->consultar();
            $viewVeiculo->listarVeiculos($veiculos);
        }
    }
    break;
    case "POST":{
        echo json_encode(["method"=>"POST"]);
    }
    break;
    case "PUT":{
        echo json_encode(["method"=>"PUT"]);
    }
    break;
    case "DELETE":{
        echo json_encode(["method"=>"DELETE"]);
    }
    break;
    default:{
        echo json_encode(["method"=>"ERRO"]);
    }
    break;
}