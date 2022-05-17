<?php
    $serializado   = $_GET['dados'];
    $pessoa        = [];
    $pessoaValida  = false;
    $retorno       = [
        'success'  => false,
        'menssage' => ''
    ];   
    
    parse_str($serializado, $dados);    
    
    foreach($dados as $key => $dado){
        if(!empty($dado)) $pessoa[$key] = $dado;
    }    

    if(count($pessoa) == 10){
        $pessoaValida = true;
    }    
    
    if($pessoaValida){
        echo 'completo';
        print_r($pessoa);
    }else{
        echo 'incompleto';
    }

?>