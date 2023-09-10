<?php
    $mecabe = rand(0, 48);
    if ($mecabe<=0){
        echo  'Tu aguante es tan limitado que dentro de ti no cabe ni una queja';
    }else if ($mecabe>=48){
        echo '¡Podría ser que el Empire State Building sea lo único que te quepa después de tanto ajetreo! 😄🏙️';
    }else{
        echo $mecabe;
    }
?>
