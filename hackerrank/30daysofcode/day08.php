<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
while(!feof($_fp))
{
    $array[]=fgets($_fp);
}
for($i=1;$i<=$array[0];$i++)
{
    $string[]=$array[$i];    
}
while($i<count($array))
{
    $query[]=$array[$i];
    $i=$i+1;
}
foreach($string as $data)
{
    $information[]=explode(" ",$data);
}
foreach($information as $data)
{
    $dictionary[$data[0]]=$data[1];
}
foreach($query as $data)
{
    if(isset($dictionary[trim($data)]))
    {
        echo trim($data)."=".trim($dictionary[trim($data)])."\n";
    }
    else
    {
        echo "Not found\n";
    }
}



?>
