<?php
// $num = 5;


function fizzbuzz($num) {

if ($num % 5 == 0 && $num % 3 == 0) {
    return "FizzBuzz";
} elseif ($num % 5 == 0) {
    return "Fizz";
} elseif ($num % 3 == 0) {
    return "Buzz";

}

}
echo fizzbuzz($num=15);
?>




<?php
$n=10;
$a=0;
$b = 1;


echo $a . " " .$b . " " ; 

for ($i = 1; $i < $n; $i++) {
    $c = $a + $b;
    echo $c ." " ;
    $a = $b;
    $b = $c;
}


// $num = 10;

// function fib($num) {
//     if ($num == 0) {
//         return 0;
//     } elseif ($num == 1) {
//         return 1;
//     } else {
//         return fib($num - 1) + fib($num - 2);
//     }
// }

// for ($i = 0; $i < $num; $i++) {
//     echo fib($i) . " ";
// }
?>






