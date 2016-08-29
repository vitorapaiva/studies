<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
while(!feof($_fp))
{
    $array[]=fgets($_fp);
}
for($i=1;$i<=$array[0];$i++)
{
    $arrayEven='';
    $arrayOdd='';
    $arrayString=str_split(trim($array[$i]));
    for($x=0;$x<count($arrayString);$x++)
    {
        if(($x%2)==0)
        {
            $arrayEven[]=$arrayString[$x];
        }
        else
        {
            $arrayOdd[]=$arrayString[$x];
        }
    }    
    echo implode("",$arrayEven)." ".implode("",$arrayOdd)."\n";
}
?>
