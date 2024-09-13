<?php

function Checkingarray($array){
    $n = count($array);

    for($i=0;$i<=$n;$i++){
        if($array[$i]+1== $array[$i+1] && $array[$i]+2== $array[$i+2] ){
            
            return true;
        }
    // if($array[3]+1==$array[4] && $array[3]+2==$array[5] ){
        
    //     return "true\n";
    // }
    }
    return false;
}

var_dump(Checkingarray([7, 5, 4, 1, 2, 3])); 
// var_dump(Checkingarray([7, 5, 4, 9, 2, 1])); 



function arr($a){
$n = count($a) - 3;
    if($n<3){
        return false;
    }
    for($i=0;$i<=$n;$i++){
        if($a[$i] == $a[$i+1] - 1 && $a[$i] == $a[$i+2] - 2 ) {
            return true;
        }
    }
    return false;

}
$a =  [7, 5, 4, 1, 2, 13];
var_dump(arr($a))
?>





