<?php
session_start();


$usuarios_app = array(
    array('email' =>'luis.seiax@gmail.com', 'senha' => '210502') ,  
    array('email' =>'luis.seia.com', 'senha' => '251102')
);

$usuarioAutenticado = false;
foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuarioAutenticado = true;
    }  
} 

if($usuarioAutenticado){
    $_SESSION['autenticado'] = 'sim';
    header('Location:home.php');
}else{
    header('Location:index.php?login=erro'); // funcao para redicionamento
    $_SESSION['autenticado'] = 'nao';
}

?>