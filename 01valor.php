<?php
$v = $_POST["val"];
 $vetor= str_split($v);

 $max =strlen($v);
 
for ($i=0; $i <$max ; $i++) { 
    $letra=ord($vetor[$i]);
    
    if ($letra == 97) {
        echo("4");
    } else if($letra == 101) {
        echo("3");
    } else if($letra == 105) {
        echo("1");
    } else if($letra == 111) {
        echo("0");
    } else if($letra == 117) {
        echo("9");
    } else{echo(chr($letra));}
    
        
}


?>