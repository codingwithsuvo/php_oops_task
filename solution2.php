<?php

interface Fruit {

  public function apple();
  public function orange();
  
}

abstract class Sour implements Fruit{
   public function apple(){
     echo" function apple is called inside abstract class sour<br>";
   }
}


class Sweet  extends sour {
     private $sl_no;
     private $name;
     
     public function __construct($name){
       $this->name=$name;
    
     }
     public function orange(){
        
        echo"function orange called inside Sweet class<br>";
     }
     public function setSl($sl_no){
        $this->sl_no=$sl_no;
     }
      public function getsl_no(){
       return $this->sl_no;
     }
     
      public function setName($name){
        $this->name=$name;
     }
     public function getName(){
        return $this->name;
     }
     
     
}
//now making object of class abc
$obj =new Sweet("lichi");
$obj->apple();
$obj->orange();
$obj->setSl(3);
echo $obj->getsl_no();
echo "<br>";
$obj->setName("lichi");
echo $obj->getName();



?>