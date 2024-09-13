<?php

// class NewClass {

//     public $info = "This is some kind of info";

// }

// $object = new NewClass;
// var_dump ($object);

// class Person {

//  private $first = "Ajay";
//  Private $last = "Stha";
//  private $age = "25";
// }

// class Pet {
//     public function owner () {
//         $a = "Hi there!";
//         return $a;
//     }
// }


// Inheritance

class Bird {
    public $name;
    
    public function __construct($name){
        $this->name =$name;
    }

    public function singSong(){
        echo $this->name . " sings a song.";
    }
}

class Parrot extends Bird {
    public function makeSound() {
        echo $this->name . " songs beautifully.";
    }
}
$parrot = new Parrot("Sweety");
$parrot->singSong();
$parrot->makeSound();

//multiple in heritance


  
trait givebirth {
    public function birth(){
        echo " I can give birth\n";
    }
}

trait CanCry {
    public function cry(){
        echo "I can cry\n";
    }
}

class Women {
    use givebirth, CanCry;

     public function shout() {
        echo "I can shout\n";
     }

     }

     $women = new Women();
     $women->birth();
     $women->cry();
     $women->shout();


    
    

