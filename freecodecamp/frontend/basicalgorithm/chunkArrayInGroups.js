function chunkArrayInGroups(arr, size) {
  var newArray=[];
  var i=0;
  while(i<arr.length){
    newArray.push(arr.slice(i,(i+size)));
    i=i+size;
  }
  return newArray;
}

chunkArrayInGroups([0, 1, 2, 3, 4, 5], 3);
