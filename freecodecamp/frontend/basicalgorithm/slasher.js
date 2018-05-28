
function slasher(arr, howMany) {
  // it doesn't always pay to be first
  var arrNew=arr.splice(howMany);
  return arrNew;
}

slasher([1, 2, 3], 2);
