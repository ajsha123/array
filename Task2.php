<?php
// function wordFrequency($input) {
//     // $input = strtolower($input);

    
//     $words = explode(' ', $input);
//     $frequency = [];

//     foreach ($words as $word) {
//         if ($word !== '') {
//             if (isset($frequency[$word])) {
//                 $frequency[$word]++;
//             }else{
//                 $frequency[$word] = 1;

//                 }
//             }
//         }
//         return $frequency;
//     }

//     $input = "the man the boss and the worker";
//     $result = wordFrequency($input);

//     print_r($result);


class Counter
{
    private $input;

    public function __construct(string $input)
    {
        $this->input = $input;
    }

    public function wordFrequency(): array
    {
        $input = strtolower($this->input);

    
    $words = explode(' ', $input);
    $frequency = [];

    foreach ($words as $word) {
        if ($word !== '') {
            if (isset($frequency[$word])) {
                $frequency[$word]++;
            }else{
                $frequency[$word] = 1;

                }
            }
        }
        return $frequency;
    }
}

$input = "the man the boss and the worker";
    $Counter = new Counter($input);
    $result = $Counter->wordFrequency();

    echo "Word Counter:\n";
    print_r($result);
    ?>








   
   
