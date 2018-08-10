<?php

$query = "SELECT * FROM T_CATEGORIA";

$exec = ibase_query($connect, $query) or die ('Não foi possivel retornar a consulta');
