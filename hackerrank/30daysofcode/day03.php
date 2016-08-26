<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$N);
if(($N%2)==0)
{
    if($N>=2 && $N<=5)
    {
        echo 'Not Weird';   
    }
    if($N>=6 && $N<=20)
    {
        echo 'Weird';   
    }
    if($N>20)
    {
        echo 'Not Weird';   
    }
}
else
{
    echo 'Weird';    
}

?>
