<?php

function SomaUm($num){
    return $num++;
}

for($i = 0; $i < 5; $i++){
    echo SomaUm($i);
}

