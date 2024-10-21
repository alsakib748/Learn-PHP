
var name = function(a,b,c,...data){
    let sum = 0;
    for(let val of data){
        sum = sum + val;
    }
    console.log(sum);
};

name(1,2,3,4,5,6);