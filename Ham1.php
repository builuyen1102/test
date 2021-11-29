<?php

function say_hello(){
    echo "Hello World"."\n";
}

say_hello();
say_hello();
say_hello();


$say_hello = function(){
    echo "Good Morning"."\n";
};

$say_hello();
