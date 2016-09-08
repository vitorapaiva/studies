<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
//converts number to binary
//and verifies the longest 1 sequence
while($n>=1)
{
    if(($n%2)==1)
    {
        $countSequence++;
        if($countSequence>$maxSequence)
        {
            $maxSequence=$countSequence;
        }
    }
    else
    {
        $countSequence=0;
    }
    $n=$n/2;
}
echo $maxSequence;
?>
