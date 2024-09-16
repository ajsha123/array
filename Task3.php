<?php

// function differnt($array1, $array2){
//     return array_diff($array1, $array2);
// }

// $array1 = ['male','female','lesiban'];
// $array2 = ['man','cat','male'];

// $result = differnt($array1,$array2);

// print_r($result);



class ArrayDiffernece
{
    private $array1;
    private $array2;

    public function __construct(array $array1, array $array2)
    {
        $this->array1= $array1;
        $this->array2= $array2;

    }

    public function difference(): array
    {
        return array_diff($this->array1,$this->array2);
    }
}

$array1 = ['20','21','22','23','24'];
$array2 = ['26','23','21','27','22'];

$result = array_diff($array1,$array2);

print_r($result);

