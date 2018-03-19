
function confirmEnding(str, target) {
  strSize=str.length;
  targetSize=target.length;
  var start=strSize-targetSize;
  var endOfStr=str.substr(start,targetSize);
  if(endOfStr==target){
    return true;
  }
  return false;
}

confirmEnding("Bastian", "n");
