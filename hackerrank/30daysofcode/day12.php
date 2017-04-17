<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}
class Student extends person {
    private $testScores;
    
    /*	
    *   Class Constructor
    *   
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    // Write your constructor here
    public function __construct($first_name,$last_name,$identification,$testScores)
    {
        $this->firstName=$first_name;
        $this->lastName=$last_name;
        $this->id=$identification;
        $this->testScores=$testScores;        
    }
    /*	
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here
    public function calculate()
    {
        $arrayScores=$this->testScores;
        if(is_array($arrayScores))
        {
            $total=0;
            foreach($arrayScores as $score)
            {
                $total=$total+$score;    
            }
            $media=$total/count($arrayScores);
            switch ($media) {
                case $media >=90 && $media <=100:
                    $nota="O";
                    break;
                case $media >=80 && $media <90:
                    $nota="E";
                    break;
                case $media >=70 && $media <80:
                    $nota="A";
                    break;
                case $media >=55 && $media <70:
                    $nota="P";
                    break;
                case $media >=40 && $media <55:
                    $nota="D";
                    break;
                case $media <40:
                    $nota="T";
                    break;
            }
            return $nota;
        }
    }
}
$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");
