<?php
for($i = 1; $i <= 20; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo "Bà Năm nắm tay ông ba"."\n";
        continue;
    } else if($i % 3 == 0) {
        echo "Ông ba"."\n";
        continue;
    }else if($i % 5 == 0){
        echo "ba năm"."\n";
        continue;
    } else {
        echo $i."\n";
    }
    
}