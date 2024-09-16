<?php
//   function groupByNamesAge($person) {
//     $ageGroups = [];

//     foreach ($person as $person) {
//         $ageGroups[$person['age']] [] = $person['name'];
//     }

//     return $ageGroups;
//   }

//   $person = [
//      ['name' => 'John', 'age' => '21'],
//      ['name' => 'Cena', 'age' => '23'],


//   ];



//   $result = groupByNamesAge($person);
//   print_r($result);


class GroupofPeople
{
    private $person;

    public function __construct(array $person)
    {
        $this->person = $person;
    }

    public function groupByNamesAge(): array
    {
        $agegroups = [];
        foreach ($this->person as $person) {
            $age =$person['age'];

            if (!isset($ageGroups[$age])) {
                $ageGroups[$age] = [];
            }
            $agegroups[$age][] = $person['name'];
        }
        return $ageGroups;
    }
}
  
$person = [
         ['name' => 'John', 'age' => '21'],
         ['name' => 'Cena', 'age' => '23'],
];

$GroupofPeople = new GroupofPeople($person);
$result = $GroupofPeople->groupByNamesAge();

echo "Names grouped by age:\n";
print_r($result);
?>



