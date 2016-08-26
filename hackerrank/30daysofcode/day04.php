<?php
class Person
{
    public $age;
    public function __construct($initialAge)
    {
        // Add some more code to run some checks on initialAge
        if($initialAge<0)
        {
            $initialAge=0;
            echo 'Age is not valid, setting age to 0.';
        }
        $this->age=$initialAge;
    }
    public function amIOld()
    {        
        if($this->age<13)
        {
            echo "\nYou are young.";
        }
        else if($this->age>=13 && $this->age<18)
        {
            echo "\nYou are a teenager.";
        }
        else if($this->age>=18)
        {
            echo "\nYou are old.";
        }
    }
    public  function yearPasses()
    {
        $this->age=$this->age+1;
    }  
      
}
$T = intval(fgets(STDIN));
 for($i=0;$i<$T;$i++){
     $age=intval(fgets(STDIN));
     $p=new Person($age);
     $p->amIOld();
     for($j=0;$j<3;$j++){
         $p->yearPasses();
     }
     $p->amIOld();
     echo "\n";
         
 }
?>
