<?php
 @include('conexao.php');

 $query = "SELECT CD_CLIENTE, NM_CLIENTE FROM T_CLIENTE";
 $retorno = ibase_query($conexao, $query) or die ('Não foi possivel retornar a consulta');

 $i = 0;
 while ($row = ibase_fetch_row($retorno)) { 
    $cd_cliente = $row['0'];
    $nm_cliente = $row['1'];
    $i++;
    
    echo "<p>Código = $cd_cliente - Nome = $nm_cliente</p>";  
} 

if($i == 0) { 
    echo "Registros não encontrados!"; 
} 

ibase_free_result($retorno);
ibase_close($conexao);
?>

