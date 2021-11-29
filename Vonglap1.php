<?php
for($i = 0; $i <= 4; $i++){
    if($i==3){
        break;
    }
    echo $i."\n";
}


for($i = 0; $i <= 4; $i++){
    if($i==3){
        continue;
    }
    echo $i."\n";
}