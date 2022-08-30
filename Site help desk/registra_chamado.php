<?php 

$arquivo = fopen('arquivo.txt', 'a');

$texto = 'Titulo: '. $_POST['titulo'] .'<br> Categoria: ' .$_POST['categoria'] .'<br> Descricao: ' .$_POST['descricao'] .PHP_EOL; 

echo $texto;


fwrite($arquivo, $texto);
fclose($arquivo);

header('Location: abrir_chamado.php');

?>