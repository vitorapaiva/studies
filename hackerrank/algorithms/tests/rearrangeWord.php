/*
 * Complete the 'rearrangeWord' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING word as parameter.
 * The string must be next alphabetically greater string available by reorganizing the string
 */

function rearrangeWord($word) {
    // Write your code here
    $count=1;
    $countEqual=0;
    $loopSize=(strlen($word)-1)**(strlen($word)-1);
    $combinationList[0]=$word;
    for($letterIndex=0;$letterIndex<strlen($word);$letterIndex++){
        if(isset($word[$letterIndex+1])){            
            if($word[$letterIndex]==$word[$letterIndex+1]){
                $countEqual++;
            }
        }
    }
    if($countEqual==strlen($word)-1){
        return 'no answer';
    }
    while($count<=$loopSize){
        $tryCount=0;
        $newString=str_shuffle($word);
        while(in_array($newString,$combinationList) && strcasecmp($word,$newString)>=0){            
            $newString=str_shuffle($word);
        }
        $combinationList[$count]=$newString;
        $count++;
    }
    usort($combinationList,'strcasecmp');
    print_r($combinationList);
    $currentWordPosition=array_search($word,$combinationList);
    $nextWord=$currentWordPosition+1;
    return $combinationList[$nextWord];
}

