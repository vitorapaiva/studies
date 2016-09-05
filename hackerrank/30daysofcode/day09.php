<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
function factorial($int)
{
    if($int>0)
    {
        return $int*factorial($int-1);
    }
    else
    {
        return $int+1;
    }
    
}
echo factorial(fgets($_fp));
?>
