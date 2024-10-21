
let dynamicFunction = function(){
    console.log("Al Sakib Ayon");
}
// dynamicFunction();

let add = function(a,b){
    let c = a + b;
    console.log("Summation of "+a+" + "+b+" = "+c);
}
// add(10,20);

let fact = function(n){
    let product = 1;
    for(let i=1;i<=n;i++){
        product = product * i;
    }
    console.log("Factorial of "+n+" is : "+product);
}
fact(5);