<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
while(!feof($_fp))
{
    $array[]=fgets($_fp);
}
$tip=$array[0]*($array[1]/100);
$tax= $array[0]*($array[2]/100);
$totalCost = round($array[0]+$tip+$tax);
echo 'The total meal cost is '.$totalCost.' dollars.'
?>
