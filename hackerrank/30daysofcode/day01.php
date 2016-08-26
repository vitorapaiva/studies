<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";

// Read and save an integer, double, and String to your variables.
while(!feof($handle))
{
    $array[]=fgets($handle);
}
// Print the sum of both integer variables on a new line.
echo ($i+$array[0]) . "\xA";
// Print the sum of the double variables on a new line.
echo number_format(($d+$array[1]),1,'.',',') . "\xA";
// Concatenate and print the String variables on a new line
echo $s.$array[2];
// The 's' variable above should be printed first.

fclose($handle);
?>
