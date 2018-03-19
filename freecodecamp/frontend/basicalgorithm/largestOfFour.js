
function largestOfFour(arr) {
  var largest;
  var newArr=[];
  for(var i=0;i<arr.length;i++){
    largest=0;
    for(var x=0;x<arr[i].length;x++){
      if(arr[i][x]>largest){
        newArr[i]=arr[i][x];
        largest=arr[i][x];
      }
    }
  }
  return newArr;
}

largestOfFour([[4, 5, 1, 3], [13, 27, 18, 26], [32, 35, 37, 39], [1000, 1001, 857, 1]]);
