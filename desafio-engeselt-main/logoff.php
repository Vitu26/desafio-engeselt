<?php
 session_start();

 session_destroy();
 header('Location: index.php');
 //remover indices dos array de sessão, removendo 1 a 1
 //unset() -> remove o indece apenas se existir




 //destruir a variavel de sessão, remover todos os indices ao mesmo tempo
 //session_destroy() -> remove todos os indices contidos dentro da global session


?>