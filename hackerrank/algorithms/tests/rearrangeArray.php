/*
 * Complete the 'rearrange' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY elements as parameter.
 * Return an array rearrenged following two conditions:
 * Quantity of the '1' in the number binary 
 * If quantity of 1 is the same, the decimal size is used to rearrenge
 */

function rearrange($elements) {
    // Write your code here
    for($countElement=0;$countElement<count($elements);$countElement++){
        $binaryNumber[$countElement]=$elements[$countElement]%2;
        $nextDivision=$elements[$countElement]/2;
        while(($nextDivision/2)>0){
            $binaryNumber[$countElement].=$nextDivision%2;
            $nextDivision=$elements[$countElement]/2;
        }
    }
    print_r($binaryNumber);
}
