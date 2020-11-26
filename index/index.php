<?php

  $categorias  = [];
  $categorias [] = 'infantil';
  $categorias [] = 'adolescentes';
  $categorias[] = 'adultos';

  $nome = 'eduardo';
  $idade = 4 ;

  if($idade >= 0 && $idade <= 12)
  {
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        echo "o nadador ".$nome. " compete na categoria infantil";
    }
  }
  else if($idade >= 13 && $idade <= 18)
  {
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescentes')
        echo "o nadador ".$nome. " compete na categoria adolescentes";
    }
  }
  else 
  {
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adultos')
        echo "o nadador ".$nome. " compete na categoria adultos";
    }
  }

  //var_dump($nome);
  //var_dump($idade);

 // print_r($categorias);

?>