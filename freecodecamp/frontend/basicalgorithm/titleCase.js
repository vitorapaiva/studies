function titleCase(str) {
  var arrayStr=str.split(" ");
  var capitalizedStr='';
  for(var i=0;i<arrayStr.length;i++){
    if(i==0){
      capitalizedStr+=arrayStr[i].substr(0,1).toUpperCase() +arrayStr[i].substr(1).toLowerCase(); 
    }
    else{
      capitalizedStr+=" "+arrayStr[i].substr(0,1).toUpperCase() +arrayStr[i].substr(1).toLowerCase(); 
    }     
  }
  return capitalizedStr;
}

titleCase("I'm a little tea pot");
