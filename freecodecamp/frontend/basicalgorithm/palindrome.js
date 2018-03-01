
function palindrome(str) {
  // Good luck!
  str=str.toLowerCase();
  str=str.replace(/[^a-zA-Z0-9]/g, '');
  var newStr='';
  for(var i=str.length-1;i>=0;i--){
    newStr+=str[i];
  }
  
  if(str==newStr){
    return true;
  }
  return false;
}



palindrome("eye");
