<?php 
//  class Human {
//     public $name="iti";
//     protected $phone="234";
//     private $address="menoufia";
//     static $count=0;
//   function __construct($phone,$address,$name="user_Name")
//   {
//     $this->name=$name;
//     $this->address=$address;
//     $this->phone=$phone;
//     self::$count++;
//   }
//   function setAddress($address)
//   {
//     $this->address=$address;
//   }
//   function getAddresss()
//   {
//     return $this->address;
//   }
//   function setphone($phone)
//   {
//     $this->phone=$phone;
//   }
//   function getphones()
//   {
//     return $this->phone;
//   }
//    function printData()
//   {
//      echo $this->name,"<br>",$this->getphones(),"<br>",$this->getAddresss();
//   }
//   function testFinal():string
//   {
//        return $this->name;
//   }
// }

// class developer extends Human{
//    public $salary;
      
// function __construct($name,$phone, $address,$salary)
// {
// //    $this->name=$name;
// parent::__construct($name,$phone,$address);
// $this->salary=$salary;
// }
// function printDeveloper()
// {
//     // parent::printData();
//     $this->printData();
//     echo $this->salary;
// }

// function testFinal():string
// {
//     return "test";
// }
// }

// ================================== Abstract Class =================
// abstract class Worker{
//     public $hourRate;
//     function __counstruct($rate)
//     {
//         $this->hourRate=$rate;
//     }

//     // abstract function sayHello():void;
//     function printSalary($hourRate)
//     {
//         return $hourRate*30;
//     }
// }

// class Instructor extends Worker{

// // function sayHello():void{
// //     echo "hello Instructor <br>";
// // }
// }


// $i=new Instructor();
// echo $i->printSalary(50);
// $i->sayHello();

// $h=new Human(phone:"1234",address:"fjdfj",name:"open source");
// // $h=new Human(phone:"1234",address:"fjdfj",name:"open source");
// // $h=new Human(phone:"1234",address:"fjdfj",name:"open source");
// // echo $h->phone;
// // echo Human::$count;
// echo "<br>";
// // echo $h->address;
// // echo $h->name;
// // $h->printData();

// $d=new Developer (phone:"12345",address:"cairo",name:"mohammed",salary:25000);
// // echo $d->phone;
// echo $d->name;
// // print_r($d);
// echo "<br>".$d->printDeveloper();



// ================================== Interface =================
 
// class Test {

// }
// interface Worker {
// public $rate;
// function printHi():void;
// function printSalary():int;

// }


// interface iti{
// function printITI():void;
// }
// interface job extends Worker , iti{

// }

// class developer implements job{

// }
// // class developer extends Test  implements Worker , job{

// }


//====================== Static method 
//  class Human {
//     public $name="iti";
//     protected $phone="234";
//     private $address="menoufia";
//     static $count=0;
//   function __construct($phone,$address,$name="user_Name")
//   {
//     $this->name=$name;
//     $this->address=$address;
//     $this->phone=$phone;
//     self::$count++;
//   }
//   function setAddress($address)
//   {
//     $this->address=$address;
//   }
//   function getAddresss()
//   {
//     return $this->address;
//   }
//   function setphone($phone)
//   {
//     $this->phone=$phone;
//   }
//   function getphones()
//   {
//     return $this->phone;
//   }
//    function printData()
//   {
//      echo $this->name,"<br>",$this->getphones(),"<br>",$this->getAddresss();
//   }
//   function testFinal():string
//   {
//        return $this->name;
//   }

//   static function testStatic()
//   {
//     echo  self::$count ;
//   }
// }



// =============== Composition (Has-A)
// Class Laptop{
//     public $brand;
//     function __construct($brand)
//     {
//          $this->brand=$brand;
//     }

//     function printBrand()
//     {
//         return $this->brand;
//     }
// }

// Class Developer {
//    public $name;
//    public $labtop;


//    function __construct($name,Laptop $labtop)
//    {
//     $this->name=$name;
//     $this->labtop=$labtop;
//    }

//    function printData()
//    {
//     echo "<br>", $this->name , $this->labtop->printBrand();

//    }

// }

// $l=new Laptop("dell");
// $d=new Developer("yousef",$l);
//  $d->printData();



///================ Trait

// trait user{
//     public $name="iti";
//     function printName()
//     {
//         echo $this->name;
//     }
// }
// trait person{
//     // use user;
//     // function __construct(){

//     // }
//     public $track="open source";
//     function printTrack()
//     {
//         echo $this->track;
//     }
//     }


//     class Human {
//      use person , user ;


//     }

// $h=new Human();
// $h->printName();


// ================= Name space 
namespace iti;
class user{

}
$u=new user();
namespace openSource;
class user{

}

$u=new \openSource\user();
$u2=new \iti\user();
?>