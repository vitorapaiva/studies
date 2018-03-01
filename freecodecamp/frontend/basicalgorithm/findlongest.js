
function findLongestWord(str) {
  var arrayStr=str.split(' ');
  var size=0;
  for(var i=0;i<arrayStr.length;i++){
    if(arrayStr[i].length>size){
      size=arrayStr[i].length;
    }
  }
  return size;
}

findLongestWord("The quick brown fox jumped over the lazy dog");
