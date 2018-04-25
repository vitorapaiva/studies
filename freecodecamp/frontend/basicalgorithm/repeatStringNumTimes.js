function repeatStringNumTimes(str, num) {
  var newStr='';
  // repeat after me
  if(num>0){
    for(var i=0;i<num;i++){
      newStr+=str;
    }
  }
  return newStr;
}

repeatStringNumTimes("abc", 3);
