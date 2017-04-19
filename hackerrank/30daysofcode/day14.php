<?php
    class Difference
    {
      private $elements=array();
      public $maximumDifference;
      // Write your code here
      public function __construct($elements)
      {
          $this->elements=$elements;
      }
      public function ComputeDifference()
      {
          foreach($this->elements as $element)
          {
              if(!isset($maxElement) && !isset($minElement))
              {
                  $maxElement=$element;
                  $minElement=$element;
              }
              if($maxElement<$element)
              {
                  $maxElement=$element;    
              }
              if($minElement>$element)
              {
                  $minElement=$element;    
              }
          }
          $this->maximumDifference=$maxElement-$minElement;        
      }
    } //End of Difference class  
    $N=intval(fgets(STDIN));
    $a =array_map('intval', explode(' ', fgets(STDIN)));
    $d=new Difference($a);
    $d->ComputeDifference();
    print ($d->maximumDifference);
?>
