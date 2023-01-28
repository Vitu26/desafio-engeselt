<?php

    session_start();

    
    //variavel que verifica se a autenticação foi realizada
     $usuario_autenticado = false;


    //usuários
    $usuarios_app = [
        ['name' => 'Rita Echo', 'senha' => 'rita123'],
    ];

    foreach($usuarios_app as $user){

        if($user['name'] == $_POST['name'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');//força o redirecionamento de onde ele está para onde queremos, ou seja, se entrar nessa condição nós vamos forçar o redirecionamento para onde queremos
    }

    
?>