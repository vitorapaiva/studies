<?php

$handle = fopen ("php://stdin","r");
$arr = array();
for($arr_i = 0; $arr_i < 6; $arr_i++) {
   $arr_temp = fgets($handle);
   $arr[] = explode(" ",$arr_temp);
  array_walk($arr[$arr_i],'intval');
}
for($linha=0;$linha<count($arr);$linha++)
{
    for($coluna=0;$coluna<count($arr[$linha]);$coluna++)
    {
        if(isset($arr[$linha][$coluna+1]) && isset($arr[$linha][$coluna+2]) && isset($arr[$linha+1]) && isset($arr[$linha+2]))
        {
            $sum=$arr[$linha][$coluna]+$arr[$linha][$coluna+1]+$arr[$linha][$coluna+2];
            $sum=$sum+$arr[$linha+1][$coluna+1];
            $sum=$sum+$arr[$linha+2][$coluna]+$arr[$linha+2][$coluna+1]+$arr[$linha+2][$coluna+2];
            if(!isset($maxSum))
            {
                $maxSum=$sum;    
            }
            if($sum>$maxSum)
            {
                $maxSum=$sum;    
            }
        }
    }
}
echo $maxSum;
?>
